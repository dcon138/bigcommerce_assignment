<?php

namespace App\Repositories;

use Bigcommerce\Api\Client;
use App\Interfaces\CustomerInterface;

/**
 * Class CustomerRepository
 * @package App\Repositories
 * 
 * Contains logic for interacting with customer data retrieval from the BigCommerce API Client.
 */
class CustomerRepository implements CustomerInterface  {

    protected $modelClass;

    public function __construct()
    {
        $this->modelClass = Client::class;
    }

    /**
     * Submit API request to retrieve list of customers
     * 
     * @return mixed
     */
    public function getCustomers()
    {
        $model = $this->modelClass;
        return $model::getCustomers();
    }

    /**
     * Submit API request to retrieve an individual customer
     * 
     * @param $id int - the id of the customer to retrieve
     * @return mixed
     */
    public function getCustomer($id)
    {
        $model = $this->modelClass;
        return $model::getCustomer($id);
    }
}