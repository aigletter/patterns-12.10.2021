<?php

use Patterns\Composite\ElementInterface;

include __DIR__ . '/../../vendor/autoload.php';

function renderPage(ElementInterface $element)
{
    echo $element->render();
}

$element = new \Patterns\Composite\Span('Hello world');
$element2 = new \Patterns\Composite\Span('Second span');
$element->add($element2);
$div = new \Patterns\Composite\Div();
$div->add($element);
renderPage($div);