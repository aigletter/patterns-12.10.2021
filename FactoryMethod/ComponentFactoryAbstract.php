<?php


namespace Patterns\FactoryMethod;


abstract class ComponentFactoryAbstract
{
    public function createInstance(): ComponentInterface
    {
        return $this->createConcrete();
    }

    abstract protected function createConcrete(): ComponentInterface;
}