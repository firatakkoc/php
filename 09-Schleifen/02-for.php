<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
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


for ($i = 0; $i <= 5; $i++) {
    var_dump($i);
}


?></pre>

<pre style="font-family: Arial, sans-serif;"><?php

for ($y =0; $y <= 10; $y+=2) {
    if ($y === 4) {
        continue;
    }
    var_dump($y);
}

?></pre>
</body>
</html>