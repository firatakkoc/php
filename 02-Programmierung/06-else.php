<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else</title>
    <style>
        body {
            font-size: 30px;
            font-family: sans-serif;
        }
        hr {
            color: red;
        }
    </style>
</head>
<body>
<pre> <?php 
$greating = "Hallo Welt...........";
if(strlen($greating) < 15) {
    echo "Die Bedingung war erfüllt.\n";
    var_dump($greating);
}
else {
    echo "Greating ist länger gleich als 15 Zeichen.\n";
    var_dump($greating);
}

echo "<hr color='red'>"."<br>";

if(strlen($greating) > 20) {
    echo "Greating ist länger als 20 Zeichen";
}

else if (strlen($greating > 15)) {
    echo "Greating ist länger als 20 Zeichen";
}

else {
    echo "Greating ist kürzer oder gleich 15 Zeichen";
}

?></pre>
</body>
</html>