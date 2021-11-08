<?php


namespace Patterns\Observer;


use SplSubject;

class DoSomethingObserver implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo 'Я сделал свою работу с заказом ' . $subject->getStatus() . PHP_EOL;
    }
}