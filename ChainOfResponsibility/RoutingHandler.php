<?php


namespace Patterns\ChainOfResponsibility;


class RoutingHandler extends HandlerAbstract
{
    public function handle($request)
    {
        if (!isset($request->route)) {
            throw new \Exception('Нет роута');
        }

        return parent::handle($request);
    }
}