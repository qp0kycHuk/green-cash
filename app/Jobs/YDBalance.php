<?php

namespace App\Jobs;

use App\Models\Project;
use App\Services\Yandex\Direct\BalanceService;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class YDBalance implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $projects = Project::get();

        foreach ($projects as $project) {
            $balance = BalanceService::get($project->direct_key);
            $project->update(['balance' => $balance]);
            sleep(2);
        }
    }
}
