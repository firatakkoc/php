<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assoziative Arrays</title>
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
    "apple" => "Apfel",
    "orange" => "Orange"
];

$a["peach"] = "Birne";

// array_keys: das zeigt die Schlüssel unseres Arrays;
var_dump(array_keys($a));
// array_keys: das zeigt die Werte unseres Arrays;
var_dump(array_values($a));

echo " \n";

foreach($a as $value) {
    var_dump($value);
}

echo " \n";

foreach($a as $key =>  $value) {
    var_dump($key);
    var_dump($value);
}

?></pre>
</body>
</html>