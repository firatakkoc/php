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

// count dreht, Array hat (als int): wie viele element als int;  
var_dump(count($a)) ."\n";

$winner = rand(0,3);
var_dump($a[$winner]);

?></pre>
</body>
</html>