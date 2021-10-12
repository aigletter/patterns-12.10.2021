<?php


namespace Patterns\Singleton;


use PDO;

class Db
{
    protected static $instance;

    protected $connection;

    protected static $config;

    protected function __construct($dns, $user, $password)
    {
        $this->connection = new PDO($dns, $user, $password);
    }

    public static function setConfig($config = [])
    {
        self::$config = $config;
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            $dns = 'mysql:dbname=' . self::$config['dbname'] . ';host=' . self::$config['host'];
            self::$instance = new self($dns, self::$config['user'], self::$config['password']);
        }

        return self::$instance;
    }

    public function test()
    {
        print_r($this->connection);
    }
}