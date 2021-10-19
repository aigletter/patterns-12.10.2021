<?php


namespace Patterns\AbstractFactory;


class RealOrder implements OrderInterface
{
    protected $products = [];

    public function addProduct(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function calculateSum()
    {
        return 100;
    }
}