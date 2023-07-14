<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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

$stmt = $pdo->prepare('DELETE FROM news WHERE id = :id');
$stmt->bindValue(':id', 5);

$stmt->execute();

?></pre>

</body>
</html>
