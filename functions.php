<?php

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function connectToDb() {
    // of course for local and learning only -username and password wise-
    try {
        return $pdo = new PDO('mysql:host=localhost;dbname=kramer-todo', 'root', '');
    } catch (PDOException $e) {
        die('Could not connect.');
    }
}

function fetchAllTasks($pdo) {
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}