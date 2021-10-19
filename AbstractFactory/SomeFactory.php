<?php


namespace Patterns\AbstractFactory;


class SomeFactory implements FactoryInterface
{

    public function createOrder(): OrderInterface
    {
        return new SomeOrder();
    }

    public function createProduct(): ProductInterface
    {
        return new SomeProduct();
    }
}