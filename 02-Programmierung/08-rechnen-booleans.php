<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechnen mir Booleans</title>
    <style>
        body {
            font-size: 30px;
            font-family: sans-serif;
            color: darkblue;
        }
    </style>
</head>
<body>
<pre style="font-family: Arial, sans-serif;"><?php

$a = true;
$b = false;

// Boolean umdrehen
var_dump($a);
var_dump($b);
echo "<hr>";

// Logisches Und:

var_dump($a AND !$b);
var_dump($a && $b);

// Logisches Oder;

var_dump($a OR $b);
var_dump($a || $b);

// Logisches entweder-oder;
var_dump($a XOR $b);


?></pre>
</body>
</html>