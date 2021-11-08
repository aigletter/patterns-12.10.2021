<?php


namespace Patterns\Composite;


interface ElementInterface
{
    public function render(): string;

    public function add(ElementInterface $element);

    public function remove(ElementInterface $element);
}