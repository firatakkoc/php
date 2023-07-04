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

// Bir diziyi harfbüyüklügüne duyarli dogal siralama => natcasesort

$myList = array("Ali","Veli","Serkan");
natcasesort($myList);
print_r($myList);
echo "<br>" . "<br>" . "<br>";

// Bir diziyi dogal siralama algoritmasi ile siralar

natsort($myList);
print_r($myList);
echo "<br>" . "<br>" . "<br>";

// Anahtara göre siralama

// Bir diziyi anahtarlarina göre kücükten büyüge => ksort;

$myList2 = array(
    "11" => "50",
    "12" => "55",
    "3" => "90",
    "40" => "10",
    "35" => "6"
);

ksort($myList2);
print_r($myList2);
echo "<br>" . "<br>" . "<br>";

// Bir diziyi anahtarlarina göre büyükten kücüge dogru => krsort;
krsort($myList2);
print_r($myList2);
echo "<br>" . "<br>" . "<br>";

// Kullanici Tanimli Islevsel Siralama

// Kullanici tanimli bir islev kullanarak index'e göre siralarken anahtar/deger iliskisini korur => uasort

$myList3 = array(
    "11" => "50",
    "12" => "50",
    "14" => "55",
    "3" => "90",
    "40" => "10",
    "35" => "6"
);

uasort($myList3, function($a) {return $a;});
print_r($myList3);
echo "<br>" . "<br>" . "<br>";




// Kullanici tanimli bir islev kullanarak nahtar degerine göre siralar => uksort

uksort($myList3, function($a) {return $a;});
print_r($myList3);
echo "<br>" . "<br>" . "<br>";

// Kullanici tanimli bir islev kullanarak degere göre siralar => usort

usort($myList3, function($a) {return $a;});
print_r($myList3);
echo "<br>" . "<br>" . "<br>";


?>