<?php

include __DIR__ . '/../../vendor/autoload.php';

$routingHandler = new \Patterns\ChainOfResponsibility\RoutingHandler();
$authenticateHandler = new \Patterns\ChainOfResponsibility\AuthenticateHandler();
$authorizationHandler = new \Patterns\ChainOfResponsibility\AuthorizationHandler();
$routingHandler->addNext($authenticateHandler);
$authenticateHandler->addNext($authorizationHandler);
$authorizationHandler->addNext(new \Patterns\ChainOfResponsibility\ControllerHandler());

$request = new \Patterns\ChainOfResponsibility\Request();
echo $routingHandler->handle($request);

exit();