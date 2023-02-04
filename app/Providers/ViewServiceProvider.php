<?php

namespace App\Providers;

use App\View\Composers\ProjectBtnsComposer;
use Illuminate\Support\Facades\View;
use App\View\Composers\SidebarComposer;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer('components.project-links', SidebarComposer::class);
        View::composer('components.project-btns', ProjectBtnsComposer::class);
    }
}
