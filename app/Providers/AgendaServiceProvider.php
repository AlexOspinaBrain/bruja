<?php

namespace App\Providers;

use App\Services\AgendaHandler;
use Illuminate\Support\ServiceProvider;

class AgendaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\AgendaHandler', function () {
            return new AgendaHandler();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
