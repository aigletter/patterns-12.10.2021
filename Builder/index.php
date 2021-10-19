<?php

include __DIR__ . '/../../vendor/autoload.php';

/*
 * color = red
 * floor = 9
 * height = 35
 * facade = 'specific'
 */

/*$building = new \Patterns\Builder\Building(
    9,
    'red',
    35,
    'simple',
    null,
    null,
    'specific'
);*/

$builder = new Patterns\Builder\BuildingBuilder();

//$builder->setType('simple');
$builder->setFacade('specific');
$builder->setFloors(9);
//$builder->setHeight(35);
//$builder->setColor('red');


if (false) {
    $builder->setRoof('other');
}

$instance = $builder->build();

exit();