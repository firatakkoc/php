<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short If</title>
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



// if(isset($_GET['page'])) {
//     $page =(int) $_GET['page'];
// }
// else {
//     $page = 1;
// }

// var_dump($page);

$page = isset($_GET['page']) ? $_GET['page'] : 1;

var_dump($page);

// Alternative if fragen
var_dump(isset($_GET['page']) ? 'Page ist gesetzt' : 'Page ist nicht gesetzt');
var_dump((isset($_GET['page']) ? 'Page ist gesetzt' : 'Page ist nicht gesetzt') . '!');


?></pre>
</body>
</html>