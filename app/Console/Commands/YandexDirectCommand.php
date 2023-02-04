<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class YandexDirectCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'yandex:direct {--project=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Do an import from the Yandex Direct (for a specific project: --project=project-name)';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
