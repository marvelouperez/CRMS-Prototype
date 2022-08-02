<?php

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'root';
$dbName = 'crms_dbv2';
$dbURL = 'mysql:host=$dbHost;dbname=$dbName';

try {
    $dbConn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo '<pre>';
    var_dump($e->getMessage());
    echo '</pre>';
    exit;
}