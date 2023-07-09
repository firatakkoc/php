<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mehr Demensional Arrays</title>
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

$a = [
    ['title' => 'Budapest', 'content' => 'Budapest ist die Hauptstadt con Ungarn']
];

print_r($a);
?></pre>


<?php 
$firstEntry = $a[0];
var_dump($firstEntry['title']); 

?>
</body>
</html>