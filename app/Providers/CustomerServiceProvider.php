<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CustomerService;

class CustomerServiceProvider extends ServiceProvider {
    /**
     * Let's tell the service container how to instantiate a customer service by injecting a customer interface
     */
    public function register()
    {
        $this->app->bind('customerService', function($app) {
            return new CustomerService($app->make('App\Interfaces\CustomerInterface'));
        });
    }
}