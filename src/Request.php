<?php

namespace FruitRiin\Lucienne;
class Request{
    protected $query;
    protected $body;
    protected $route;
    function __construct($router){
        $this->query = $_GET;
        $this->body = $_POST;
        $this->route = $router;
    }
}