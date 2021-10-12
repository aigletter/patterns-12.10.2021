<?php


namespace Patterns\FactoryMethod;


class Db implements ComponentInterface
{
    public function __construct($user, $host, $dbname, $password)
    {
    }
}