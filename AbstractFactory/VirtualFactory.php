<?php


namespace Patterns\AbstractFactory;


class VirtualFactory implements FactoryInterface
{

    public function createOrder(): OrderInterface
    {
        return new VirtualOrder();
    }

    public function createProduct(): ProductInterface
    {
        return new VirtualProduct();
    }
}