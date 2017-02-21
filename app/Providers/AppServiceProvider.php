<?php

namespace generaKS\Providers;

use Illuminate\Support\ServiceProvider;

use Log;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        view()->composer('*', function ($view) {

            $view->with('projects',\generaKS\Project::all());

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
