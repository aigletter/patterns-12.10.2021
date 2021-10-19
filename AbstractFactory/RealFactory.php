<?php


namespace Patterns\AbstractFactory;


class RealFactory implements FactoryInterface
{
    public function createOrder(): OrderInterface
    {
        return new RealOrder();
    }

    public function createProduct(): ProductInterface
    {
        return new RealProduct();
    }
}