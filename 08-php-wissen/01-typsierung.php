<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typisierung</title>
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

$a = '2';

var_dump(is_string($a));
var_dump(is_bool($a));
var_dump(is_array($a));
var_dump(is_numeric($a));

?></pre>
</body>
</html>