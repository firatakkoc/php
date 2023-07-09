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
    ['title' => 'Budapest'],
    ['title' => 'Berlin'],
    ['title' => 'Sofia'],
    ['title' => 'Athen'],
    ['title' => 'Madrid']
];

foreach($arr as $b) {
    foreach($b as $key => $value) {
        if($value[0] === 'B') {
            echo "<li>".$value."</li>";
        }
    }
}

?></pre>

<!-- Andere Lösung-->

<pre style="font-family: Arial, sans-serif;"><?php

$filtered = [];
foreach($arr as $value) {
    if($value['title'][0] === 'B') {
        $filtered[] = $value;
    }
}

if(!empty($filtered)) {
    foreach($filtered as $value) {
        echo "<li>".$value['title']."</li>";
    }
}


?></pre>
</body>
</html>