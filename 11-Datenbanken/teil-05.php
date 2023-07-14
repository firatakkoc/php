<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>----</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-size: 30px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<pre style="font-family: Arial, sans-serif;"><?php


try {
$pdo = new PDO('mysql:host=localhost:3306;dbname=php_course', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
}
catch(PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}

$stmt = $pdo->prepare('INSERT INTO news (title, content) VALUES (:title, :content)');
$stmt->bindValue(':title', "Hallo Venus");
$stmt->bindValue(':content', "Das hier ist der Inhalt dieser Nachricht...");
$stmt->execute();

// Son girilen veririnin ID numarasini döndürme;

var_dump($pdo->lastInsertId());



?></pre>

</body>
</html>
