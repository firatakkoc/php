<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternative Syntax</title>
    <style>
        body {
            font-size: 30px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<pre style="font-family: Arial, sans-serif;"><?php

$pageTitle = "Urlaubsberichte";
?></pre>

<p>Lorem, ipsum.</p>

<?php 
    if(!empty($pageTitle)) {
        echo "<h2>". $pageTitle."</h2>";
    }
?>
</body>
</html>