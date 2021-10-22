<?php


namespace Patterns\Adapter;


use PHPMailer\PHPMailer\PHPMailer;

class PhpMailerAdapter implements MailerInterface
{
    protected $component;

    public function __construct(PHPMailer $mailer)
    {
        $this->component = $mailer;
    }

    public function sendMail($to, $message)
    {
        $this->component->addAddress($to);
        $this->component->Body = $message;
        $this->component->send();
    }
}