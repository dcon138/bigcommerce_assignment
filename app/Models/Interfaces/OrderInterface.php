<?php

namespace App\Interfaces;

/**
 * Interface OrderInterface
 * @package App\Interfaces
 * 
 * Defines the methods that should be implemented by a concrete class of the Order Repository
 */
interface OrderInterface {
    public function getOrders();
    public function getOrdersForCustomer($customer_id);
}