<?php

namespace FruitRiin\Lucienne;


class BaseController
{
    protected Request $req;
    protected Response $res;
    function __construct($router)
    {
        $this->req = new Request($router);
        $this->res = new Response();
    }


}



