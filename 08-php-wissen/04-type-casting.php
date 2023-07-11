<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Casting</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-size: 30px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<pre style="font-family: 'Arial', sans-serif;"><?php

// $a = (int)'12';
// var_dump($a);

// var_dump((int) 12.7);

// var_dump(round(12.7));
// var_dump(ceil(12.7)); //aufrunden
// var_dump(floor(12.7));

$distance =  (int)$_GET['distance'];
var_dump($distance);

?></pre>
</body>
</html>