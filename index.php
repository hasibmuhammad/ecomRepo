<?php
require_once "vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'shuvo.com',
    'database' => 'llc_ecommerce',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

$router = new RouteCollector(new RouteParser());

require_once __DIR__ . "/routes.php";

$dispathcer = new Dispatcher($router->getData());

try {
    $response = $dispathcer->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
} catch (HttpRouteNotFoundException $e) {
    echo $e->getMessage();
}
echo $response;
