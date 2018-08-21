<?php

namespace App\Services;

use App\Interfaces\OrderInterface;

/**
 * Class OrderService
 * @package App\Services
 *
 * Houses all logic related to manipulation / aggregation of order data.
 */
class OrderService {
    protected $orderRepository;

    public function __construct(OrderInterface $orderInterface)
    {
        $this->orderRepository = $orderInterface;
    }

    /**
     * Get a list of all orders in the system, then iterate over them to create a list of customer ids, with
     * each of those containing a count of the number of orders listed against that customer id.
     *
     * This is done because it is more efficient than submitting an API request for each customer to get their count
     * of orders, and there doesn't appear to be a way to get the count of orders for all customers but grouped by
     * customer id. 
     * 
     * @return array
     */
    public function getOrderCountPerCustomer()
    {
        $orders = $this->orderRepository->getOrders();

        $countPerCustomer = [];
        foreach ($orders as $order) {
            if (empty($countPerCustomer[$order->customer_id])) {
                $countPerCustomer[$order->customer_id] = 1;
            } else {
                ++$countPerCustomer[$order->customer_id];
            }
        }

        return $countPerCustomer;
    }

    /**
     * Get a collection of orders for a specific customer
     * 
     * @param $customer_id int - the id of the customer to filter by
     * @return mixed
     */
    public function getOrdersForCustomer($customer_id)
    {
        return $this->orderRepository->getOrdersForCustomer($customer_id);
    }
}