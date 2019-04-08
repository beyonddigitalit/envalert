<?php

namespace Beyonddigitalit\Envalert;

use Illuminate\Support\ServiceProvider;

class EnvalertServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load views for the package
        $this->loadViewsFrom(__DIR__ . "/resources/views", "envalert");
        // Publish view
        $this->publishes([
            __DIR__ . "/resources/views" => resource_path("/views/vendor/envalert/partials"),
        ]);
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
