<?php

// Testando...
use Respect\Rest\Router;

require_once __DIR__."/../vendor/autoload.php";

$teste = new SON\Test();

$r3 = new Router();

$r3->get("/hello", function() {
    echo "Olá";
});
