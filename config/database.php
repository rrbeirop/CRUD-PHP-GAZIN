<?php

class Database {
    private $host = "localhost";
    private $port = "3306";
    private $dbName = "gazin";
    private $user = "root";
    private $pass = "";

    public function conectar() {
        $url = "mysql:host=$this->host;port=$this->port;dbname=$this->dbName;charset=utf8mb4";
        $cnn = new PDO($url, $this->user, $this->pass);
        return $cnn;
    }
}