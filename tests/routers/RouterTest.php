<?php
namespace tests\routers;

use PHPUnit\Framework\TestCase;
use Bramus\Router\Router;

class RouterTest extends TestCase
{

    private $router;
    public function setUp(): void
    {
        $this->router = new Router();
    }
    public function testRouterGetRootStatus200()
    {
        $con = curl_init("http://api-n.ddev.site/");
        curl_exec($con);
        $msg = curl_getinfo($con, CURLINFO_HTTP_CODE);
        curl_close($con);


        $this->assertEquals(200, $msg);
    }
}
