<?php
// dizinin baslangicina eklemek icin => array_unshift;

$obst = array("Apfel", "Birne");

array_unshift($obst, "Melone", "Kirsche");
print_r($obst);

// dizinin baslangicindan eleman kaldirmak icin => array_shift;

array_shift($obst);

echo "<br>";

print_r($obst);

// dizinin sonuna veri eklemek icin => array_push;

array_push($obst, "Kiwi");
echo "<br>";
print_r($obst);

// dizinin sonundan eleman kaldirmak icin => array_pop;

array_pop($obst);
echo "<br>";
print_r($obst);

// belirlenen index numarali veriyi kaldirmak icin => unset;

unset($obst[2]);
echo "<br>";
print_r($obst);



?>