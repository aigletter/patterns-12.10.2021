<?php


namespace Patterns\ChainOfResponsibility;


class AuthenticateHandler extends HandlerAbstract
{

    public function handle(Request $request)
    {
        return parent::handle($request);
    }
}