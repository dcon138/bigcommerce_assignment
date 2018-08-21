<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\OrderService;

class OrderServiceProvider extends ServiceProvider {
    /**
     * Let's tell the service container how to instantiate an order service by injecting an order interface
     */
    public function register()
    {
        $this->app->bind('orderService', function($app) {
            return new OrderService($app->make('App\Interfaces\OrderInterface'));
        });
    }
}