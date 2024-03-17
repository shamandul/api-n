<?php
use Bramus\Router\Router;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     title="My First API",
 *     version="0.1"
 * )
 */
class OpenApi
{
}

$router = new Router();
/**
     * @OA\Get(
     *     path="/",
     *     summary="Get root status",
     *     tags={"inicio"},
     *     @OA\Response(
     *         response="200",
     *         description="The data"
     *     )
     * )
     */
$router->get('/', function () {
    return json_encode(["mensaje" => 'Primer mensaje']);
});

$router->set404(function () {
    return json_encode(["error" => 'Error 404 not found']);
});


$router->run();
