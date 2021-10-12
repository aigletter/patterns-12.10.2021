<?php


namespace Patterns\FactoryMethod;


class RouterFactory extends ComponentFactoryAbstract
{
    protected function createConcrete(): ComponentInterface
    {
        return new Router();
    }
}