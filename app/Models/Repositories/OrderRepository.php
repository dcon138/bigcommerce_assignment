<?php

namespace App\Repositories;

use Bigcommerce\Api\Client;
use App\Interfaces\OrderInterface;

/**
 * Class OrderRepository
 * @package App\Repositories
 * 
 * Contains logic for interacting with customer data retrieval from the BigCommerce API Client.
 */
class OrderRepository implements OrderInterface  {

    protected $modelClass;

    public function __construct()
    {
        $this->modelClass = Client::class;
    }

    /**
     * Submit API request to retrieve a list of orders
     * 
     * @return mixed
     */
    public function getOrders()
    {
        $model = $this->modelClass;
        return $model::getOrders();
    }

    /**
     * Submit API request to retrieve a list of orders, filtered by a specific customer id
     * 
     * @param $customer_id int - the id of the specific customer to filter orders by.
     * @return mixed
     */
    public function getOrdersForCustomer($customer_id)
    {
        $model = $this->modelClass;
        
        $filter = ['customer_id' => $customer_id];
        
        return $model::getOrders($filter);
    }
}