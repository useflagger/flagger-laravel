<?php

namespace Flagger\Laravel;

use Illuminate\Support\ServiceProvider;

class FlaggerServiceProvider extends ServiceProvider
{
    public $bindings = [
        Contracts\Client::class => Services\DirectClient::class,
    ];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/flagger.php';

        $this->publishes([$configPath => config_path('flagger.php')], 'config');
        $this->mergeConfigFrom($configPath, 'flagger');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Flagger\Client::class, function($app) {
            return new \Flagger\Client(config('flagger'));
        });
    }
}
