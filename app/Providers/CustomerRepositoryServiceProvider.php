<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomerRepositoryServiceProvider extends ServiceProvider {
    /**
     * Let's tell the service container to give us a CustomerRepository when we ask for a CustomerInterface
     */
    public function register()
    {
        $this->app->bind('App\Interfaces\CustomerInterface', 'App\Repositories\CustomerRepository');
    }
}