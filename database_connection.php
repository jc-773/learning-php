<?php
//Database credentials
$host = "localhost";
$port = "3306";
$dbName = "blog";
$username = "root";
$password = getenv("MYSQL_PASSWORD");

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute($pdo::ATTR_ERRMODE, $pdo::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
