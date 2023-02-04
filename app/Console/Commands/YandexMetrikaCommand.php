<?php

namespace App\Console\Commands;

use App\Models\Project;
use Illuminate\Support\Arr;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class YandexMetrikaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yandex:metrika
        {--project= : Available slugs: dirijer-sada, oazis-roz, garden-class, klubsadprof, сvetoriya}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Do an import from the Yandex Metrika (for a specific project: --project=project-name)';

    /**
     * The api main url
     *
     * @var string
     */
    protected $apiUrl = 'https://api-metrika.yandex.net/stat/v1/data/bytime';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->createStats();

        return Command::SUCCESS;
    }

    /**
     * Create http request and get statistics by the counter ids
     * real ids: '83420104,90914006,91695832,91434956'
     *
     * @return void
     */
    protected function createStats()
    {
        $counterIds = $this->counterIds();

        if (empty($counterIds)) {
            return $this->error('Projects not found');
        }

        $bar = $this->output->createProgressBar(count($counterIds));
        $bar->start();

        foreach ($counterIds as $counterId) {
            $this->updateProject($counterId);
            $bar->advance();
        }

        $bar->finish();

        return $this->info("\nDone!");
    }

    protected function updateProject($counterId)
    {
        $http = $this->http($counterId);

        $data = [
            'visits_total' => $http['data'][0]['metrics'][0][0],
            'visits_new' => $http['data'][0]['metrics'][1][0],
        ];

        $yandex = Project::where('counter_id', $counterId)->first()->yandex();
        $importedToday =  $yandex->whereDate('created_at', today());

        return $importedToday->count() ? $importedToday->update($data) : $yandex->create($data);
    }

    /**
     * Http request
     *
     * @return Illuminate\Support\Facades\Http;
     */
    protected function http($counterId)
    {
        $response = Http::withToken(env('YM_CLIENT_ID'))->get($this->apiUrl, [
            'id' => $counterId,
            'metrics' => 'ym:s:visits,ym:s:newUsers',
            'date1' => 'yesterday',
            'date2' => 'yesterday',
            'group' => 'day'
        ]);

        if (!$response->ok()) {
            $this->error("\nHttp error: " . $response->status());
            return dd();
        }

        return $response->json();
    }

    /**
     * Find project by slug or return all projects
     *
     * @return array
     */
    protected function counterIds()
    {
        $slug = $this->option('project');
        $project = Project::select('counter_id');
        $ids = $slug ? $project->where('slug', $slug)->get() : $project->get();

        return Arr::whereNotNull(Arr::pluck($ids->toArray(), 'counter_id'));
    }
}