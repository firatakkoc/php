<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
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
    "",
    "Erika Mustermann",
    "Monika Mustermann",
    "Alexander Mustermann"
];

// empty kontrolliert,dass Array leer ist. Wenn Array voll ist, dreht false;
var_dump(empty($a));
var_dump(empty($a[0]));

// isset kontrolliert,dass Array voll ist. Wenn Array voll ist, dreht true;
var_dump(isset($a[0]));

// unset löscht eine elemente in Array, das kann in auch RAM gelöscht werden.
unset($a[0]);
var_dump($a);

$array = [1, 2, 3];
unset($array[1]);
var_dump($array);




?></pre>

<pre style="font-family: Arial, sans-serif;"><?php

$b = [
    "Orange",
    "Orange",
    "Apfel",
    "Banane",
    "Apfel",
    "Yoghurt"
];

// Dieses Array zeigt nur die eindeutigen Elemente.
var_dump(array_unique($b))."\n";

// sort mach sortieren als Alphabetisch unsere Array:
sort($b);
var_dump($b);

?></pre>
</body>
</html>