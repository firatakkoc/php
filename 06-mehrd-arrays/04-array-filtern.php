<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Filtern</title>
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

var_dump('Berlin'[-1]);

$arr = [
    'Budapest',
    'Berlin',
    'Sofia',
    'Athen',
    'Madrid'
];

var_dump($arr[1][0]);



?></pre>

<ul>

<pre style="font-family: Arial, sans-serif;"><?php

    foreach($arr as $city) {
        if($city[0] === 'B') {
            echo "<li>".$city."</li>";
        }
    }

?></pre>

</ul>






</body>
</html>