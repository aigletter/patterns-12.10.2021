<?php


class App
{
    protected $a;

    protected $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function run()
    {
        $db = new \Patterns\Singleton\Db('localhost', 'project', 'root', '1q2w3e');
    }
}