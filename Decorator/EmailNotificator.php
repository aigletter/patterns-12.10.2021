<?php


namespace Patterns\Decorator;


class EmailNotificator implements NotificationInterface
{
    public function sendNotification()
    {
        // Сложная реализация

        echo 'Email was sent' . PHP_EOL;
    }
}