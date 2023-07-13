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
catch(PDOException) {
}

// $stmt = $pdo->prepare('SELECT * FROM `news` WHERE `id` = '. $_GET['id']);

$id = (int) $_GET['id'];

$query = 'SELECT * FROM `news` WHERE `id` = '. $id;
var_dump($query);
$stmt = $pdo->prepare($query);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump($result);


?></pre>

</body>
</html>
