<?php
require_once 'DatabaseConnection.php';

Class PDOConnection{
    private $pdo;

    public function __construct(DatabaseConnection $connection,string $username,string $password){
        $dsn = $connection->getDsn();
        $this->pdo = new PDO($dsn, $username, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getPdo(): PDO {
        return $this->pdo;
    }
}