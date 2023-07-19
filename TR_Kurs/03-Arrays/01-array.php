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

$marka = array(
    'marka1' => 'Toyota',
    'marka2' => 'BMW' 
);

foreach($marka as $key => $m ) {
    echo $key. " = " . $m."<br>";
}

?></pre>
</body>
</html>