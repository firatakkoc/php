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

$a = [ 
    "Max Mustermann",
    "Erika Mustermann",
    "Monika Mustermann",
    "Alexander Mustermann"
];

var_dump($a[0]);

// Suchen-Funktion für eine Element in ein Array
// Das dreht boolean Ergebnis true oder false;
var_dump(in_array("Max Mustermann", $a));

if (in_array("Max Mustermann", $a)) {
    echo "Max Mustermann ist im Array enthalten! \n";
}

if (in_array("Max Müller", $a)) {
    echo "Max Mustermann ist im Array enthalten! \n";
}
else {
    echo "Max Mustermann ist nicht im Array enthalten! \n";
}

?></pre>
</body>
</html>