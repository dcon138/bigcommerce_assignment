<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Facades\Customer;
use App\Facades\Order;

/**
 * Class CustomerDetailsComposer
 * @package App\Http\ViewComposers
 * 
 * Prepare the data to be displayed for the customer details view. This data includes the customer resource itself,
 * plus the list of orders belonging to this customer.
 */
class CustomerDetailsComposer {
    /**
     * Bind data to the view.
     *
     * @param View $view
     */
    public function compose(View $view)
    {
        $customer = Customer::getCustomer($view->customer_id);
        $orders = Order::getOrdersForCustomer($view->customer_id);

        $view->with(compact('customer', 'orders'));
    }
}