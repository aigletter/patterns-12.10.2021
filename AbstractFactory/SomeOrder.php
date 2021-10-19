<?php


namespace Patterns\AbstractFactory;


class SomeOrder implements OrderInterface
{
    protected $products = [];

    public function addProduct(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function calculateSum()
    {
        // TODO: Implement calculateSum() method.
    }
}