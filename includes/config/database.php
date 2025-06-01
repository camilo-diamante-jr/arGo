<?php
require_once 'config.php';

try {
    $pdo = new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'utf8'");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
