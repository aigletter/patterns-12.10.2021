<?php


namespace Patterns\Bridge;


class UserReport implements ReportInterface
{
    protected $formatter;

    public function __construct(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    public function report($data)
    {
        // TODO: Implement report() method.
    }
}