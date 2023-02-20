<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Support\Arr;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Services\Yandex\Direct\BalanceService;

class YandexDirectCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yandex:direct
        {--project= : Available slugs: dirijer-sada, oazis-roz, garden-class, klubsadprof, сvetoriya}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Do an import from the Yandex Direct (for a specific project: --project=project-name)';

    /**
     * The api main url
     *
     * @var string
     */
    protected $apiUrl = 'https://api.direct.yandex.ru/live/v4/json';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->updateBalance();
        return Command::SUCCESS;
    }

    /**
     * Get current balance
     */
    protected function updateBalance()
    {
        $ydKeys = $this->directKeys();

        $bar = $this->output->createProgressBar(count($ydKeys));
        $bar->start();

        foreach ($ydKeys as $key) {
            $balance = BalanceService::get($key);
            $moneyIn = $this->moneyIn($key);

            if ($balance) {
                $this->updateProject($key, $balance, $moneyIn);
            }

            sleep(2);

            $bar->advance();
        }

        $bar->finish();

        return $this->info("\nDone!");
    }

    /**
     * Update project
     *
     * @param mixed $ydKey
     * @param mixed $balance
     * @param mixed $moneyIn
     * @return mixed
     */
    protected function updateProject($ydKey, $balance, $moneyIn)
    {
        $yandex = Project::yandexByDirectKey($ydKey);
        $yandexYesterday = Project::yandexByDirectKey($ydKey)
            ->select('balance')
            ->whereDate('created_at', now()->yesterday())->first();

        $data = ['balance' => $balance, 'money_in' => $moneyIn];

        if (isset($yandexYesterday->balance)) {
            $data['spending'] = $yandexYesterday->balance + $moneyIn - $balance;
        }

        $importedToday = $yandex->whereDate('created_at', today());

        return $importedToday->count() ? $importedToday->update($data) : $yandex->create($data);
    }

    /**
     * Get moneyIn history
     *
     * @param int $directKey
     * @return int $total
     */
    protected function moneyIn($directKey)
    {
        // Carbon::create(2023, 01, 20, 0, 0, 0, 'GMT')->toIso8601ZuluString()
        // Carbon::create(2023, 01, 21, 0, 0, 0, 'GMT')->toIso8601ZuluString()

        $response = Http::post($this->apiUrl, [
            'method' => 'GetEventsLog',
            'token' => env($directKey),
            'param' => [
                'TimestampFrom' => now()->yesterday()->toIso8601ZuluString(),
                'Currency' => 'RUB',
                'Filter' => [
                    'EventType' => ['MoneyIn']
                ]
            ]
        ]);

        if (!$response->ok()) {
            $this->error("\nHttp error: " . $response->status());
            return dd();
        }

        $response = collect($response->json()['data'] ?? []);
        $total = $response->reduce(fn ($price1, $price2) => $price1 + $price2['Attributes']['Payed']);

        return $total;
    }

    /**
     * Find a project by slug or return all projects
     *
     * @return array
     */
    protected function directKeys()
    {
        $slug = $this->option('project');
        $project = Project::select('direct_key');
        $ids = $slug ? $project->where('slug', $slug)->get() : $project->get();

        return Arr::whereNotNull(Arr::pluck($ids->toArray(), 'direct_key'));
    }
}
