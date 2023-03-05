<?php
use PHPUnit\Framework\TestCase;
use FruitRiin\Lucienne\Router;

class RouterTest extends TestCase
{
    public function testコントローラー名の解決()
    {
        $_SERVER["REQUEST_URI"] = "/hello/say";

        $router = new Router();
        $this->expectOutputString('\Controllers\helloController', $router->resolvedControllerName);
    }


    public function testメソッド名の解決(){
        $_SERVER["REQUEST_URI"] = "/hello/say";
        $router = new Router();
        $this->expectOutputString('say', $router->resolvedControllerName);
    }
}