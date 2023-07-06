<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warenkorb</title>
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

$warenkorb = [
    "Banane",
    "Apfel",
    "Orange",
    "Brot",
    "Yoghurt"
];

if (empty($warenkorb)) {
    echo "<p>Warenkorb ist leer</p>";
} else {
    echo "<ul>";
    sort($warenkorb);
    foreach ($warenkorb as $w) {
        echo "<li>".$w."</li>";
    }
    echo "</ul>";
}


?></pre>
</body>
</html>