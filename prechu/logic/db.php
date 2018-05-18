<?php

$driver = 'mysql';
$host = '127.0.0.1';
$db_name = 'info';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset",$db_user,$db_pass,$options);
    session_start();
} catch(PDOException $e) {
    die("Something went wrong with your connection to database");
}