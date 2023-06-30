<?php
// dizilerde kücükten büyüge dogru siralama islemi => asort();

$city = array(
    "Ankara" => "6",
    "Istanbul" => "34",
    "Adana" => "1",
    "Izmir" => "35"
);

asort($city);

print_r($city);

echo "<br>" . "<br>" . "<br>";

// dizilerde büyükten kücüge dogru siralama islemi => arsort();

arsort($city);

print_r($city);
echo "<br>" . "<br>" . "<br>";

// Anahtar iliskisi korunmadan Siralama => sort

$number = array(24, 5, 46, 23, 4, 23, 25, 634, 12, 35, 63, 9);

// anahtari korumadan büyükten kücüge;
sort($number);
print_r($number);
echo "<br>" . "<br>" . "<br>";

// anahtari korumadan kücükten büyüge;
rsort($number);
print_r($number);
echo "<br>" . "<br>" . "<br>";

// anahtari korumadan rastgele siralama
shuffle($number);
print_r($number);
echo "<br>" . "<br>" . "<br>";

?>