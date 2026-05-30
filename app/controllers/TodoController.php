<?php

require_once '../app/models/TodoModel.php';

class TodoController {
    
    private $model;

    public function __construct() {
        $this->model = new TodoModel();
    }

    public function index() {
        if (isset($_POST['tambah'])) {
            $this->model->tambah($_POST['judul']);
        }
        
        $todos = $this->model->getAll();
        require_once '../app/views/todo_list.php';
    }
}