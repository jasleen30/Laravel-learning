<?php
require 'todo.html';
class Todo 
{
    private ?string $taskname;
    private array $tasklist;

    
    public function __construct() {
        session_start();
        $this->saveTasks();
       
    }

    public function saveTasks() {
       $_SESSION["taskName"] = array();
        $this->tasklist[] = $_POST["todoname"];

        if( $_SERVER["REQUEST_METHOD"] == "POST" ){
            $_SESSION["taskName"] = $_POST["todoname"];
            
        }
        $this->showTasks();
    }

    public function getTasks($taskname) :self {
       
        $this->tasklist[] = $taskname;
        return $this;
    }

    public function showTasks()  {
        // $sessionData = $_SESSION["taskName"];
        // foreach($sessionData as $session)
        // {
            print_r($_SESSION["taskName"]);
        // }
       
    }

}

$obj = new Todo();
?>