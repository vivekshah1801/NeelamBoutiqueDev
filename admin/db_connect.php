<?php
//establishes database connections and returns PDO variable named 'pdo'.
//use $pdo for accessing database.

$host = 'remotemysql.com:3306';
$db   = '1YJUdPIJnd';
$user = '1YJUdPIJnd';
$pass = 'xB7t4HzAro';
$charset = 'utf8mb4';

//$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
