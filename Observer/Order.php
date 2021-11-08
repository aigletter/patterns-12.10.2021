<?php


namespace Patterns\Observer;


use SplObserver;

class Order implements \SplSubject
{
    protected $status = 'unpaid';

    /**
     * @var SplObserver[]
     */
    protected $observers = [];

    public function init()
    {

    }

    public function updateStatus($status)
    {
        $this->status = $status;
        $this->notify();
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        foreach ($this->observers as $key => $item) {
            if ($observer === $item) {
                unset($this->observers[$key]);
                break;
            }
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}