<?php


namespace Patterns\ChainOfResponsibility;


class ControllerHandler extends HandlerAbstract
{
    public function handle(Request $request)
    {
        return 'Hello world';
    }
}