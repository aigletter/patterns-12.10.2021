<?php


namespace Patterns\FactoryMethod;


class LoggerFactory extends ComponentFactoryAbstract
{
    protected function createConcrete(): ComponentInterface
    {
        return new Logger();
    }
}