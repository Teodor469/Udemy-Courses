<?php

//Database Creds
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'root';
$password = '';


$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
    //Create PDO instance
    $pdo = new PDO($dsn, $username, $password);

    //Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Database Connected...';
} catch(PDOException $e) {
    //if there is an error, catch it here
    echo 'Connection Failed: ' . $e->getMessage();
}