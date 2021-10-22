<?php

include __DIR__ . '/../../vendor/autoload.php';

$notificator = new \Patterns\Decorator\EmailNotificator();
$smsNotificator = new \Patterns\Decorator\CmsNotificator($notificator);
$telegramNotificator = new \Patterns\Decorator\TelegramNotificator($smsNotificator);

$orderCreator = new \Patterns\Decorator\OrderCreator($telegramNotificator);

$orderCreator->createOrder([]);

exit();