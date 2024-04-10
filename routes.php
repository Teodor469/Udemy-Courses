<?php

// return [
//     '/udemy-course-first/public/index.php' => 'controllers/home.php',
//     '/udemy-course-first/public/index.php/listings' => 'controllers/listings/index.php',
//     '/udemy-course-first/public/index.php/listings/create' => 'controllers/listings/create.php',
// ];


$router->get('/udemy-course-first/public/index.php', 'controllers/home.php');
$router->get('/udemy-course-first/public/index.php/listings', 'controllers/listings/index.php');
$router->get('/udemy-course-first/public/index.php/listings/create', 'controllers/listings/create.php');
$router->get('/udemy-course-first/public/index.php/listing', 'controllers/listings/show.php');