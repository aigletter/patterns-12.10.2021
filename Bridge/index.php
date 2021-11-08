<?php

include __DIR__ . '/../../vendor/autoload.php';

//$reporter = new \Patterns\Bridge\OrderReport(new \Patterns\Bridge\PdfFormatter());
/*$reporter = new \Patterns\Bridge\OrderReport(
    new \Patterns\Bridge\JpegFormatter()
);*/
$reporter = new \Patterns\Bridge\UserReport(new \Patterns\Bridge\JpegFormatter());

///

$reporter->report([
    'id' => 24
]);