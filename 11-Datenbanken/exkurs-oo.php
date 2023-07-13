
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

$zip = new ZipArchive();
$zip->open(__DIR__.'/Archive.zip');
var_dump($zip);

// $fn = $zip->getNameIndex(0);
// var_dump($fn);

$contents = $zip->getFromName('secret.txt');
var_dump($contents);

echo "<br>";


$zip2 = new ZipArchive();
$zip2->open(__DIR__.'/Archive2.zip');
var_dump($zip2->getFromIndex(0));


?></pre>
</body>
</html>