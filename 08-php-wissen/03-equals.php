<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equals Operators</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-size: 30px;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
<pre style="font-family: 'Arial', sans-serif;"><?php

/* (===) operatörü, değerlerin hem değerlerini hem de türlerini karşılaştırır. 
Eğer değerler ve türler tam olarak aynı ise true döner. Örneğin, 5 === 5 ifadesi true 
dönerken, 5 === "5" ifadesi false döner, 
çünkü biri tam sayı diğeri ise dize olarak değerlendirilmektedir.*/

/* (==) operatörü ise değerleri karşılaştırırken tür dönüşümlerini 
otomatik olarak gerçekleştirir. 
Yani, iki değerin değerleri eşit olduğu sürece true döner. 
Örneğin, 5 == 5 ifadesi true dönerken, 5 == "5" ifadesi de true döner, 
çünkü ikincisinde değerler otomatik olarak dönüştürülmüştür. */

var_dump('Hallo Welt' === 'Hallo Welt');

var_dump('Hallo Welt' == 'Hallo Welt');

var_dump('12' == 12);
var_dump('12' != 12);
var_dump('12' !== 12);


?></pre>
</body>
</html>