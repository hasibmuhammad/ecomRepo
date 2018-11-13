<?php
require_once "vendor/autoload.php";
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;

$router = new RouteCollector(new RouteParser());

require_once __DIR__ . "/routes.php";

$dispathcer = new Dispatcher($router->getData());

try{
    $response = $dispathcer->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}catch(HttpRouteNotFoundException $e){
    echo $e->getMessage();
}
echo $response;