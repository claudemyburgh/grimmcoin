<?php

namespace App\Providers;


use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class ForceHttpsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
//        if (config('app.force_https')) {
//            $url->forceHttps();
//        }
//        URL::forceHttps($this->app->environment('production'));
        URL::forceHttps(config('app,force_https'));

    }
}
