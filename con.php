<?php
    $host = 'localhost:3306'; 
    $dbname = 'denemedb';
    $username = 'root';
    $password = 'root';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Veritabanına bağlantı sağlanamadı: " . $e->getMessage());
    }
?>