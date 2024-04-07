<?php
require '../helpers.php';

$routes = [
    '/udemy-course-first/public/index.php' => 'controllers/home.php',
    '/udemy-course-first/public/index.php/listings' => 'controllers/listings/index.php',
    '/udemy-course-first/public/index.php/listings/create' => 'controllers/listings/create.php',
    '404' => 'controllers/error/404.php'
];


$uri = $_SERVER['REQUEST_URI'];

if(array_key_exists($uri, $routes)) {
    require(basePath($routes[$uri]));
} else {
    require basePath($routes['404']);
}