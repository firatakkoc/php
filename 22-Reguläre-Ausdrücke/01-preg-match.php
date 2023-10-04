<?php

/*
Finde die Position des ersten Vorkommens von "php" innerhalb der Zeichenkette:
<?php
echo strpos("I love php, I love php too!","php");
*/

$str = 'Hallo Mars!';
// $pattern = "/Mars!/i";  Wir geben den Wert des Wortes ein, das wir suchen möchten.

// Die Funktion preg_match() gibt zurück, ob eine Übereinstimmung in einer Zeichenkette gefunden wurde.
if (preg_match('/Mars/', $str)) {
  echo 'passt!';
} else {echo 'nein';}
