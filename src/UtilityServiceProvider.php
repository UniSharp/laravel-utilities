<?php

namespace Unisharp\Utility;

use Illuminate\Support\ServiceProvider;

/**
 * This is the utility service provider class.
 *
 */
class UtilityServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupFacades(); 
        //$this->setupConfigs();  
    }

    /**
     * Setup the configs.
     *
     * @return void
     */
    protected function setupConfigs()
    {
        $this->publishes([__DIR__ . '/config/utility.php' => config_path('utility.php', 'config'),], 'utility_config');
    }

    /**
     * Setup the facades.
     *
     * @return void
     */
    protected function setupFacades()
    {
        \App::bind('utility', function()
        {
            return new \Unisharp\Utility\Utility;
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

}