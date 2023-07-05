<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beispiel If</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 30px;
        }
    </style>
</head>
<body>
<pre style="font-family: sans-serif;"><?php 

$agb = true;
$age = 25;

if ( $agb) {
    
    if ($age >= 18) {
        echo "Bestellung wurde verweigert: Sie sind zu jung!";
    }
    else {
        echo "Bestellung wurde verweigert: Sie sind zu jung!";
    }
}
else {
    echo "Bestellung wurde verweigert: AGB nicht akteptiert!";
}

echo "<hr>";

if ($agb === false) {
    echo "Bestellung wurde verweigert: AGB nicht akteptiert!";
}
else if ($age < 18) {
    echo "Bestellung wurde verweigert: Sie sind zu jung!";
}

else {
    echo "Bestellung wurde verweigert: Sie sind zu jung!";
}
?></pre>
</body>
</html>