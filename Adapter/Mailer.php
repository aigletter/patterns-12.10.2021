<?php


namespace Patterns\Adapter;


class Mailer implements MailerInterface
{
    public function sendMail($to, $message)
    {
        echo 'Email to ' . $to . ' was sent successfully';
    }
}