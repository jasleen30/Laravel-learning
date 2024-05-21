<?php

session_start();

class TodoCtrl
{
    private ?string $todo;

    public function __construct($post)
    {
        if (isset($post['todo']) && !empty($post['todo'])) {
            $this->todo = $post['todo'];
            $this->storeTodoInSession();
        }
    }

    public function storeTodoInSession()
    {
        if (!isset($_SESSION['todos'])) {
            $_SESSION['todos'] = [];
        }
        
        array_push($_SESSION['todos'], $this->todo);
    }

    public function getTodos()
    {
        return (isset($_SESSION['todos'])) ? $_SESSION['todos'] : [];
    }
}

$todoCtrl = new TodoCtrl($_POST);
