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

$arr = [
    ['title' => 'Budapest', 'content' => 'Budapest ist die Hauptstadt von Ungarn'],
    ['title' => 'Helsinki', 'content' => 'Helsinki ist die Hauptstadt von Finnland'],
    ['title' => 'Stockholm', 'content' => 'Stockholm ist die Hauptstadt von Schweden'],
];

foreach($arr as $key => $value) {
    print_r($value);
}

?></pre>
</body>
</html>