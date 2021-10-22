<?php


namespace Patterns\Decorator;


class TelegramNotificator implements NotificationInterface
{
    protected $component;

    public function __construct(NotificationInterface $component)
    {
        $this->component = $component;
    }

    public function sendNotification()
    {
        $this->component->sendNotification();

        echo 'Message to telegram was sent' . PHP_EOL;
    }
}