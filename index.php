<?php

$query = require "core/bootstrap.php";

$router = new Router;

require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

var_dump($uri);

require $router->direct($uri);