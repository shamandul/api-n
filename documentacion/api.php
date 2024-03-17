<?php
require('../vendor/autoload.php');

$openapi = \OpenApi\Generator::scan([$_SERVER['DOCUMENT_ROOT'].'/app/routers/']);
header('Content-Type: application/json');

echo $openapi->toJSON();
