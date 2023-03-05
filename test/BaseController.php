<?php
use PHPUnit\Framework\TestCase;
use FruitRiin\Lucienne\BaseController;
use FruitRiin\Lucienne\Response;
use FruitRiin\Lucienne\Request;
class BaseControllerTest extends TestCase {
    public function testConstructor(){
        $router = [];

        $example = new BaseController($router);

        $this->assertInstanceOf(BaseController::class, $example);
    }
}
