<?php

namespace Noweh\SoundcloudApi;

use Illuminate\Support\ServiceProvider;

class SoundcloudServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Publishes package config file to applications config folder
        $this->publishes([__DIR__.'/config/soundcloud.php' => config_path('soundcloud.php')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('soundcloud', function () {
            return new Soundcloud();
        });
    }
}
