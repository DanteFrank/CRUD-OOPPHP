<?php

class Db {
    private $host ="localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "crud";

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';$dbName=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
