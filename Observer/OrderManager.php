<?php


namespace Patterns\Observer;


class OrderManager
{
    public function createOrder($data = [])
    {
        $order = new Order();
        $order->init();
    }

    public function markDone(Order $order)
    {
        $order->updateStatus('done');
    }
}