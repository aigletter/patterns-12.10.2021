<?php

include __DIR__ . '/../../vendor/autoload.php';

$order = new \Patterns\Observer\Order();

$observer = new \Patterns\Observer\EmailSender();
$order->attach($observer);

$observer2 = new \Patterns\Observer\DoSomethingObserver();
$order->attach($observer2);

// ........


$order->updateStatus('paid');
$order->updateStatus('done');

exit();