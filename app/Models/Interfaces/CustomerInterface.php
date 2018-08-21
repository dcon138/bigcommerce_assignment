<?php

namespace App\Interfaces;

/**
 * Interface CustomerInterface
 * @package App\Interfaces
 * 
 * Defines the methods that should be implemented by a concrete class of the Customer Repository 
 */
interface CustomerInterface {
    public function getCustomers();
    public function getCustomer($id);
}