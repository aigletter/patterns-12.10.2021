<?php


namespace Patterns\Adapter;


class OrderCreator
{
    protected $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function createOrder(array $data)
    {
        // TODO

        $this->mailer->sendMail($data['to'], 'Order was created');
    }
}