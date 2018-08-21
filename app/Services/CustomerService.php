<?php

namespace App\Services;

use App\Interfaces\CustomerInterface;

/**
 * Class CustomerService
 * @package App\Services
 * 
 * Houses all logic related to manipulation / aggregation of customer data. 
 */
class CustomerService {
    protected $customerRepository;

    public function __construct(CustomerInterface $customerInterface)
    {
        $this->customerRepository = $customerInterface;
    }

    /**
     * Get a list of customers - no need to manipulate data
     * 
     * @return mixed
     */
    public function getCustomers()
    {
        return $this->customerRepository->getCustomers();
    }

    /**
     * Get one specific customer - no need to manipulate data
     * 
     * @param $id int - the id of the customer to retrieve
     * @return mixed
     */
    public function getCustomer($id)
    {
        return $this->customerRepository->getCustomer($id);
    }
}