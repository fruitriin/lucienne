<?php

namespace FruitRiin\Lucienne;

class Router
{
    function __construct()
    {

    }

    function run(): void{
        $path = $_SERVER["REQUEST_URI"];
        $method = $_SERVER["REQUEST_METHOD"];

        $requests = explode($path, "/");

        $resolvedControllerName = $requests[0] . "Controller";
        $resolvedMethodName = end();

        $controller = new $resolvedControllerName($requests);

        $controller->$resolvedMethodName();
    }

}