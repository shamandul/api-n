<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/foo', function (Request $request, Response $response, array $args) {
  $payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);
  $response->getBody()->write($payload);
  return $response->withHeader('Content-Type', 'application/json');
});
$app->get('/users', function (Request $request, Response $response, array $args) {
  $payload = json_encode(['id' => 1, 'name' => 'Jesús'], JSON_PRETTY_PRINT);
  $response->getBody()->write($payload);
  return $response->withHeader('Content-Type', 'application/json');
});
$app->run();
