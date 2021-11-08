<?php


namespace Patterns\ChainOfResponsibility;


abstract class HandlerAbstract implements HandleInterface
{
    /**
     * @var HandleInterface
     */
    protected $next;

    public function addNext(HandleInterface $handle)
    {
        $this->next = $handle;
    }

    public function handle(Request $request)
    {
        if (isset($this->next)) {
            return $this->next->handle($request);
        }

        throw new \Exception('Can not handle');
    }
}