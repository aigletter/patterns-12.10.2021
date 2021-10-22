<?php


namespace Patterns\Decorator;


class OrderCreator
{
    protected $notificator;

    public function __construct(NotificationInterface $notificator)
    {
        $this->notificator = $notificator;
    }

    public function createOrder($data)
    {
        // TODO

        $this->notificator->sendNotification();
    }
}