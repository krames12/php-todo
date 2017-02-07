<?php

class Connection {
  public static function make() {
    // of course for local and learning only -username and password wise-
    try {
        return new PDO('mysql:host=localhost;dbname=kramer-todo', 'root', '');
    } catch (PDOException $e) {
        die('Could not connect.');
    }
  }
}