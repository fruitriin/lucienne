<?php

namespace FruitRiin\Lucienne;

use Slim\Http\Response;
use Slim\Http\ServerRequest;

class BaseController
{
    protected ServerRequest $req ;
    protected Response $res;

    function __construct()
    {
        $this->req = new ServerRequest();
        $this->res = new Response();
    }

}