<?php


namespace Patterns\FactoryMethod;


class DbFactory extends ComponentFactoryAbstract
{

    protected function createConcrete(): ComponentInterface
    {
        $data = include 'credentials.php';
        return new Db($data['root'], $data['localhost']);
    }
}