<?php

$database = require 'core/bootstrap.php';

$router = new Router();

require 'routes.php';

$prefix = '/learn';

$str = $_SERVER['REQUEST_URI'];

if (substr($str, 0, strlen($prefix)) == $prefix) {
    $str = substr($str, strlen($prefix));
}

$str = trim($str, '/');


require $router->direct(( strlen($str) > 0 ) ? $str : '');


