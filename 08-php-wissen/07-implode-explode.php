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

$products = ['Orange', 'Notizblock', 'Käse'];

// $s = '';

// foreach($products as $product) {
//     $s = $s . $product. ', ';
// } 

// var_dump($s);

// var_dump(implode(', ',$products));

// Array'e dönüstürüyor;
$str = 'Lorem Ipsum Hallo Welt';
var_dump(explode(' ', $str));
?></pre>
</body>
</html>