<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Facades\Customer;
use App\Facades\Order;

/**
 * Class CustomersComposer
 * @package App\Http\ViewComposers
 * 
 * Prepare the data to be displayed for the customer list view. This data includes the collection of customer resources,
 * plus an array containing the count of orders per customer id.
 */
class CustomersComposer {
    /**
     * Bind data to the view.
     * 
     * @param View $view
     */
    public function compose(View $view)
    {
        $customers = Customer::getCustomers();
        $orderCountPerCustomer = Order::getOrderCountPerCustomer();
        
        $view->with(compact('customers', 'orderCountPerCustomer'));
    }
}