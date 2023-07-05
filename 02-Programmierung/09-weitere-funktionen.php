<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weitere Funktionen</title>
    <style>
        body {
            font-size: 30px;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <pre style="font-family: Arial, sans-serif;"><?php

    /* 
isset() fonksiyonu, bir değişkenin tanımlı olup olmadığını ve değerinin boş olup 
olmadığını kontrol etmek için kullanılan bir PHP fonksiyonudur. Bu fonksiyon, 
belirli bir değişkenin var olup olmadığını kontrol etmek için kullanılırken, 
aynı zamanda değişkenin değerinin null olup olmadığını da kontrol edebilir.*/

    $greeting = "Hallo Welt!";
    //unset($greeting);

    if (isset($greeting)) {
        echo $greeting . "\n";
    }
    echo "<hr>";

    /*
    empty() fonksiyonu, bir değişkenin boş olup olmadığını kontrol etmek için kullanılan bir PHP fonksiyonudur. 
    Bu fonksiyon, belirli bir değişkenin var olup olmadığını ve değerinin boş olup olmadığını kontrol eder.
    */
    $pageTitle = "Mallorca";
    if (!empty($pageTitle)) {
        echo $pageTitle;
    }
    ?></pre>
</body>

</html>