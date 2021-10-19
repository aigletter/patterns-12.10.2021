<?php


namespace Patterns\AbstractFactory;


class RealProduct implements ProductInterface
{
    public function getFullName()
    {
        return 'Real product';
    }
}