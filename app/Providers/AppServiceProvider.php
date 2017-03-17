<?php

namespace generaKS\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

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
        /* view composers*/
        view()->composer('*', function ($view) {

            $view   ->  with('projects',\generaKS\Project::all())
                    ->  with('partitionings',\generaKS\Partitioning::all())
            ;

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
