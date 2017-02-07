<?php

$query = require "bootstrap.php";
require "classes\Task.php";

$tasks = $query->selectAll('todos');

require "index.view.php";

?>