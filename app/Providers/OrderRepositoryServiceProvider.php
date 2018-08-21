<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class OrderRepositoryServiceProvider extends ServiceProvider {
    /**
     * Let's tell the service container to give us an OrderRepository when we ask for an OrderInterface
     */
    public function register()
    {
        $this->app->bind('App\Interfaces\OrderInterface', 'App\Repositories\OrderRepository');
    }
}