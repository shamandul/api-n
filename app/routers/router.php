<?php
use Bramus\Router\Router;

$router = new Router();

$router->get('/', function () {
    return json_encode(["mensaje" => 'Primer mensaje']);
});

$router->set404(function () {
    return json_encode(["error" => 'Error 404 not found']);
});


$router->run();
