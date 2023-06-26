<?php
$name = "Firat ";
$nachname = "Akkoc";


echo $name;
echo $nachname;
echo"  <br>";
echo gettype($name);

echo" <br>";
$city = "Ankara";
$$city = " Hauptstadt ";

echo $Ankara;

// Degiskenin veritipini ögrenmek icin "gettype()" fonksiyonu kullanilir.

echo" <br>";

$var  = 35;
echo" <br>";
echo $var," = ";

echo gettype($var);

echo" <br>";

$d = (double)35;
echo $d," = ";
echo gettype($d);


echo" <br>";
// ondalikli degeri int cevirme
$f = 3.5555;

$newInt = (int)$f;

echo $newInt, " = ";
echo gettype($newInt);
echo" <br>";

// bir degiskenin degerini sonradan degistirmek icin "settype()" kullaniyoruz

$newSet = 44;
echo "old = ", gettype($newSet);
echo" <br>";
settype($newSet, "string");
echo "new = ", gettype($newSet);

// Degisken öldürme

echo" <br>";
$test = "test";

echo $test. " done ";

unset($test);

// echo $test;
// Warning: Undefined variable $test in /Users/firatakkoc/Documents/labs/php/Anfang/variable.php on line 61

## Konstante Variablen

// Sabit degisken tanimlamak icin "define()" fonksiyonu kullanilir.
// Büyük, kücük haft duyarlidir.
echo" <br>";
define("NAME", "Firat");
echo NAME;

// const ile sabit degisken tanimlama;

echo" <br>";
const vorname = "Firat";
echo vorname;

// Sabit degiskenlerde Array kullanimi
echo" <br>";
define("i", ["a","b","c","d"]);

echo i[2];



?>