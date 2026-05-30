<?php

require_once '../config/database.php';

class TodoModel {
    
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        $result = $this->db->query("SELECT * FROM todos");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function tambah($judul) {
        $judul = $this->db->real_escape_string($judul);
        $this->db->query("INSERT INTO todos (judul) VALUES ('$judul')");
    }
}