<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {
    /**
     * In here, let's register our view composers so that the application knows which functionality to run when
     * attempting to render particular views.
     */
    public function boot()
    {
        View::composer('customers', 'App\Http\ViewComposers\CustomersComposer');
        View::composer('details', 'App\Http\ViewComposers\CustomerDetailsComposer');
    }
}