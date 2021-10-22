<?php


namespace Patterns\Decorator;


class CmsNotificator implements NotificationInterface
{
    protected $component;

    public function __construct(NotificationInterface $component)
    {
        $this->component = $component;
    }

    public function sendNotification()
    {
        $this->component->sendNotification();

        echo 'Sms was sent' . PHP_EOL;
    }
}