<?php

require "functions.php";

class Task {
    protected $description;
    protected $completed = false;
    
    public function __construct($description) {
        $this->description = $description;
    }
    
    public function isComplete() {
        return $this->completed;
    }
    
    public function complete() {
        $this->completed = true;
    }
    
    public function getDescription() {
        return $this->description;
    }
}

$tasks = [
    new Task("get money"),
    new Task("feed cats"),
    new Task("touch butt")
];

$tasks[0]->complete();

// dd($tasks);

require "index.view.php";

?>