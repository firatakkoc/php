
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

$pdo = new PDO('mysql:host=localhost:3306;dbname=php_course', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$stmt = $pdo->prepare('SELECT * FROM `news`');
$stmt->execute();

#$stmt nesnesinin sonuçlarını bir dizi olarak alır.

# fetchAll(PDO::FETCH_ASSOC : daha temiz bir görüntü elde ediyoruz;

// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $result = $stmt->fetchAll(PDO::FETCH_NUM);

var_dump(PDO::FETCH_BOTH);

$result = $stmt->fetchAll(PDO::FETCH_BOTH);

var_dump($result);

?></pre>

<ul>
    <?php foreach ($result as $result) {
        echo "<li>".$result['title']."</li>";
    }
    ?>
</ul>

</body>
</html>
