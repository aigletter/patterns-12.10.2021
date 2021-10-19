<?php


namespace Patterns\AbstractFactory;


interface FactoryInterface
{
    public function createOrder(): OrderInterface;

    public function createProduct(): ProductInterface;
}