

<?php

$pdo = new PDO('mysql:host=localhost:3306;dbname=php_course', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);


$stmt = $pdo->prepare('SELECT * FROM `news`');
$stmt->execute();

#$stmt nesnesinin sonuçlarını bir dizi olarak alır.

# fetchAll(PDO::FETCH_ASSOC : daha temiz bir görüntü elde ediyoruz;

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($result);

?>
<ul>
    <?php foreach ($result as $result) {
        echo "<li>".$result['title']."</li>";
    }
    ?>
</ul>
