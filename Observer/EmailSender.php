<?php


namespace Patterns\Observer;


use SplSubject;

class EmailSender implements \SplObserver
{
    /**
     * @param SplSubject|Order $subject
     */
    public function update(SplSubject $subject)
    {
        echo 'Status was changed to ' . $subject->getStatus() . PHP_EOL;
    }
}