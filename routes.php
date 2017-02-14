<?php

// remove 'php-todo' from each route when putting into production
$router->define([
    'php-todo' => 'controllers/index.php',
    'php-todo/about' => 'controllers/about.php',
    'php-todo/about/culture' => 'controllers/about-culture.php',
    'php-todo/contact' => 'controllers/contact.php'
]);