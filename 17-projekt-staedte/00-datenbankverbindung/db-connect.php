<?php

try {
    $pdo = new PDO('mysql:host=localhost:3306;dbname=php_cities', 'php_cities', 'SqDFjDJni(hWy]2R', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung';
    die();
}


var_dump($pdo);