<?php

namespace FruitRiin\Lucienne;

class Router
{
    public string $resolvedControllerName;
    public string $resolvedMethodName;

    function __construct() {
        $path = $_SERVER["REQUEST_URI"];

        $requests = explode( "/", $path);
        $this->resolvedControllerName = "\\Controllers\\". $requests[1] . "Controller";
        $this->resolvedMethodName = end($requests);
    }

    function run(): void{
        /** @var $controller BaseController */
        $controller = new $this->resolvedControllerName();
        $controller->$this->resolvedMethodName();
    }
}