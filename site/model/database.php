<?php

class Database {
    private $host = 'localhost';
    private $db = 'polymobile';
    private $user = 'root';
    private $pass = '';
    private $pdo;

    public function __construct() {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->db";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            // Khởi tạo kết nối PDO
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (Exception $exception) {
            die('<div style="color: red; border: 1px solid red; padding: 10px;">Kết nối thất bại: ' 
                . $exception->getMessage() . '</div>');
        }
    }

    // Trả về đối tượng PDO
    public function getConnection() {
        return $this->pdo;
    }
}
