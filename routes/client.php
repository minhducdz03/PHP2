<?php

use Ductr\Opp\Controllers\Client\HomeController;
use Ductr\Opp\Controllers\Client\AuthController;

$router->get( '/', HomeController::class . '@index');

$router->get( '/auth/login',            AuthController::class . '@showFormLogin');
$router->post( '/auth/handle-login',    AuthController::class . '@login');
$router->get( '/auth/logout',           AuthController::class . '@logout');
