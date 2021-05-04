<?php
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

$app = new Application();


$app->router->get('/', function (){
    return "It's Working";
});

$app->router->get('/contact', function (){
    return "Nice to meet you!";
});


$app->run();