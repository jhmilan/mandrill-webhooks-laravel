<?php

namespace Jhmilan\MandrillWebhooksLaravel;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class MandrillWebhooksLaravelServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // use this if your package has views
        //$this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'mandrillwebhookslaravel');

        // use this if your package has routes
        $this->setupRoutes($this->app->router);

        $this->publishes([
                __DIR__.'/config/config.php' => config_path('mandrillwebhookslaravel.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/Services/Jhmilan' => app_path('Services/Jhmilan')
        ], 'services');

        // use the vendor configuration file as fallback
        $this->mergeConfigFrom(
             __DIR__.'/config/config.php', 'mandrillwebhookslaravel'
        );
    }
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Jhmilan\MandrillWebhooksLaravel\Http\Controllers'], function($router)
        {
            require __DIR__.'/Http/routes.php';
        });
    }
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerMandrillWebhook();

        // use this if your package has a config file
        // config([
        //         'config/mandrillwebhookslaravel.php',
        // ]);
    }

    private function registerMandrillWebhook()
    {
        foreach (config('mandrillwebhookslaravel.services') as $contract => $service) {
            $this->app->bind($contract, $service);
        }
    }
}