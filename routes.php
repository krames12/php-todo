<?php

// remove 'php-todo' from each route when putting into production

$router->get('php-todo', 'controllers/index.php');
$router->get('php-todo/about', 'controllers/about.php');
$router->get('php-todo/about/culture', 'controllers/about-culture.php');
$router->post('php-todo/names', 'controllers/add-name.php');

// var_dump($router->routes);