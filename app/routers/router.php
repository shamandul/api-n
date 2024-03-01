<?php
use Bramus\Router\Router;

$router = new Router();

$router->get('/', function () {
    echo json_encode(["mensaje" => 'Primer mensaje']);
});

$router->run();
