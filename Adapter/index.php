<?php

include __DIR__ . '/../../vendor/autoload.php';

//$mailer = new \Patterns\Adapter\Mailer();
//$mailer = new PHPMailer\PHPMailer\PHPMailer();
$mailer = new \Patterns\Adapter\PhpMailerAdapter(new PHPMailer\PHPMailer\PHPMailer());
$orderCreator = new \Patterns\Adapter\OrderCreator($mailer);
$orderCreator->createOrder(['to' => 'ivan@gmail.com']);

exit();