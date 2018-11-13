<?php

$router->controller('/', App\Controllers\Frontend\HomeController::class);
$router->controller('/user', App\Controllers\Frontend\UsersController::class);
$router->controller('/dashboard', App\Controllers\Backend\DashboardController::class);