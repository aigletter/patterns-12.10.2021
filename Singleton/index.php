<?php

use Patterns\Singleton\Db;

include 'vendor/autoload.php';

//$db = new Db('localhost', 'project', 'root', '1q2w3e');

Db::setConfig([
    'host' => 'localhost',
    'dbname' => 'project',
    'user' => 'root',
    'password' => '1q2w3e'
]);

$db = Db::getInstance();

$db->test();


///


$db2 = Db::getInstance();
$db3 = Db::getInstance();

$result = $db === $db2 && $db2 === $db3;

var_dump($result);

exit();