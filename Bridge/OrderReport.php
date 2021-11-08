<?php


namespace Patterns\Bridge;


class OrderReport implements ReportInterface
{
    protected $formatter;

    public function __construct(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    public function report($data)
    {
        $this->formatter->format($data);
    }
}