<?php

require "functions.php";

// of course for local and learning only -username and password wise-
try {
  $pdo = new PDO('mysql:host=localhost;dbname=kramer-todo', 'root', '');
} catch (PDOException $e) {
  die('Could not connect.');
}

$statement = $pdo->prepare('select * from todos');
$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results[0]->description);

require "index.view.php";

// class Task {
//     protected $description;
//     protected $completed = false;
    
//     public function __construct($description) {
//         $this->description = $description;
//     }
    
//     public function isComplete() {
//         return $this->completed;
//     }
    
//     public function complete() {
//         $this->completed = true;
//     }
    
//     public function getDescription() {
//         return $this->description;
//     }
// }

// $tasks = [
//     new Task("get money"),
//     new Task("feed cats"),
//     new Task("touch butt")
// ];

// $tasks[0]->complete();

// // dd($tasks);

?>