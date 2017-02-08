<?php

class Connection {
  public static function make($config) {
    // of course for local and learning only -username and password wise-
    try {
        return new PDO(
          $config['connection'].';dbname='.$config['name'],
          $config['username'],
          $config['password'],
          $config['options']
        );
    } catch (PDOException $e) {
        die('Could not connect.');
    }
  }
}