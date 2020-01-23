<?php

require_once __DIR__ . '/vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->get('sim-u-duck', '\App\SimUDuck\SimUDuck@run');

$router->run();