<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP Build Query</title>
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

var_dump($_GET);

echo "\n";

$query = http_build_query(["name" => "Firat", "age" => "28", "city" => "Hamburg"]);
?></pre>

<a href="04-http-build-query.php?<?php echo $query; ?>">Link zu Firat</a>

</body>
</html>