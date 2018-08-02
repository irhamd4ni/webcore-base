<?php

namespace Webcore\Page;

use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/routes.php';

        $this->loadViewsFrom(__DIR__.'/views', 'base');

        $this->publishes([
            __DIR__.'/config' => config_path('webcore')
        ], 'config');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/webcore/base'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
