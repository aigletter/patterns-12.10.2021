<?php


namespace Patterns\ChainOfResponsibility;


interface HandleInterface
{
    public function handle(Request $request);
}