<?php

require "functions.php";
require "classes\Task.php";

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

require "index.view.php";

?>