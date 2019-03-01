<?php

namespace SongGuangyun\LaravelLogistics;

use Wythe\Logistics\Logistics;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Logistics::class, function ($app) {
            return new Logistics();
        });

        $this->app->alias(Logistics::class, 'logistics');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Logistics::class, 'logistics'];
    }
}
