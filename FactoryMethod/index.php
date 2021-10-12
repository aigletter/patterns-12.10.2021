<?php

include 'vendor/autoload.php';

function createComponent(\Patterns\FactoryMethod\ComponentFactoryAbstract $factory)
{
    return $factory->createInstance();
}

$factories[] = new \Patterns\FactoryMethod\LoggerFactory();
$factories[] = new \Patterns\FactoryMethod\RouterFactory();
$factories[] = new \Patterns\FactoryMethod\DbFactory();


foreach ($factories as $factory) {
    $instances[] = createComponent($factory);
}

exit();