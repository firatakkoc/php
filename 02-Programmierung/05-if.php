<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
    <style>
        body {
            font-size: 30px;
            font-family: sans-serif;
            
        }
    </style>
</head>
<body>
<pre> <?php 
$greaating = "Hallo Welt!";

if(strlen($greaating) < 15) {
    echo "Die Bedingung war erfüllt.\n";
    var_dump($greaating);
}

?></pre>
</body>
</html>