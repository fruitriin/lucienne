<?php
namespace FruitRiin\Lucienne;

class Response{
    function json($data): void{
        header("Content-Type: application/json; charset=utf-8");
        echo json_encode($data);
    }
}