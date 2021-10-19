<?php

include __DIR__ . '/../../vendor/autoload.php';

$factories[] = new \Patterns\AbstractFactory\RealFactory();
$factories[] = new \Patterns\AbstractFactory\VirtualFactory();
$factories[] = new \Patterns\AbstractFactory\SomeFactory();

function getInstances(\Patterns\AbstractFactory\FactoryInterface $factory)
{
    $order = $factory->createOrder();
    $product = $factory->createProduct();
    $order->addProduct($product);
    return $order;
}

foreach ($factories as $factory) {
    $orders[] = getInstances($factory);
}

exit();