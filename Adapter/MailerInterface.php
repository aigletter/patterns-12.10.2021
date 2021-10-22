<?php


namespace Patterns\Adapter;


interface MailerInterface
{
    public function sendMail($to, $message);
}