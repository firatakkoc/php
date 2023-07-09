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
    
    /* Bilgisayar bilimi ve bilişimde, yuvalama, bilgilerin katmanlar halinde düzenlendiği 
    veya nesnelerin diğer benzer nesneleri içerdiği yerdir. Neredeyse her 
    zaman bir anlamda kendine benzer veya özyinelemeli yapılara atıfta bulunur.
    
    verschachteln => nesting; */

    $a = [1, 2, 3, 4, 5, 6, 7];

    $sum = 0;
    foreach ($a as $value) {
        $sum = $sum + $value;
    }

    var_dump($sum)

        ?></pre>

<pre style="font-family: Arial, sans-serif;"><?php

$a = [
    [1,2,3,4],
    [5,6,7,8]
];

$sam = 0;
foreach($a as $b) {
    foreach ($b as $value) {
        $sam = $sam + $value;
    }
}

var_dump($sam);

?></pre>

</body>

</html>