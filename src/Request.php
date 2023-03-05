<?php

namespace FruitRiin\Lucienne;
class Request{
    protected $query;
    protected $route;
    function __construct($router){
        $this->query = parse_str($_SERVER["QUERY_STRING"]);
        $this->route = $router;
    }
}