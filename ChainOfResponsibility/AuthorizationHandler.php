<?php


namespace Patterns\ChainOfResponsibility;


class AuthorizationHandler extends HandlerAbstract
{
    public function handle(Request $request)
    {
        if (empty($request->user)) {
           throw new \Exception('Пользователь не авторизован');
        }

        return parent::handle($request);
    }
}