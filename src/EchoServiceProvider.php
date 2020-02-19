<?php

namespace  Diako\EchoString;

use Illuminate\Support\ServiceProvider;

class EchoServiceProvider extends ServiceProvider
{
    public function register()
    {
//        $this->app->make('Diako\EchoString\EchoStringController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','EchoString');
    }
}
