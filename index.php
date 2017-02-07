<?php

require "functions.php";
require "classes\Task.php";

// of course for local and learning only -username and password wise-
try {
  $pdo = new PDO('mysql:host=localhost;dbname=kramer-todo', 'root', '');
} catch (PDOException $e) {
  die('Could not connect.');
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');



require "index.view.php";

?>