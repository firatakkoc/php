<?php

$text = 'Hallo Welt 123!';

var_dump(preg_match('/\d/', $text)); 
echo '<br>';

var_dump(preg_match('/\dÄpfel/', 'hallo 5Orange5 hallo'));
echo '<br>';

var_dump(preg_match('/\d\sÄpfel/', '5 Äpfel'));
echo '<br>';

var_dump(preg_match('/\d/', 'Hallo 123'), 'Hallo');


/* 

\d Die Zeichen: 0-9
\D alle Zeichen, bis auf: 0-9
\s White-Space Zeichen: Leerzeichen, Tabulator, Zeilenumbruch...
\S Alles bis auf \s
\w Kleinbuchstabe, Großbuchstabe, Ziffer, oder Unterstrich
\W Alles bis auf \w
. Ein beliebiges Zeichen (bis auf Zeilenumbruch)

*/