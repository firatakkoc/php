<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    <style>
        body {
            font-size: 30px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<pre style="font-family: Arial, sans-serif;"><?php

// $a = array("Max Mustermann", "Erika Mustermann");

$a = ["Max Mustermann", "Erika Mustermann"];

// element hinzufügen

$a[] = "Manika Mustermann";

// element eine index auf schreiben
$a[0] = "Max Müller";

// eine bestimmte index einer element hinzufügen;
$a[10] = "Alexander Mustermann";


var_dump($a);

?></pre>
</body>
</html>