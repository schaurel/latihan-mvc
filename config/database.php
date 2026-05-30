<?php

class Database {
    
    private static $host = "localhost";
    private static $user = "root";
    private static $password = "";
    private static $dbname = "latihan_mvc";

    public static function connect() {
        $conn = new mysqli(
            self::$host,
            self::$user,
            self::$password,
            self::$dbname
        );

        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        return $conn;
    }
}