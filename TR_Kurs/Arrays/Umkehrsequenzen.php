<?php
    // Diziden Tersine Siralana Yapma

    # array_reverse();

    $myArray = array(1,2,3,4,5,6,7);

    $rev = array_reverse($myArray);
    print_r($rev);
    echo "<br>"."<br>";

    $dizi = array ("Ankara" , "izmir", "Kirikkale", "Sivas", "Sinop", "istanbul");
    $yaz = current ($dizi);
    print_r($yaz);
    echo "<br>"."<br>";
    $yaz = next ($dizi);
    print_r($yaz);
    echo "<br>"."<br>";
    $yaz = current ($dizi); // nredesin?
    print_r($yaz);
    echo "<br>"."<br>";
    $yaz = prev ($dizi);
    print_r($yaz);
    echo "<br>"."<br>";
    $yaz = end ($dizi) ;
    print_r($yaz);
    echo "<br>"."<br>";
    $yaz = current ($dizi);
    print_r($yaz);
    echo "<br>"."<br>";
    $yaz = reset ($dizi);
    print_r($yaz);
    echo "<br>"."<br>";
    $yaz = next ($dizi);
    print_r($yaz);
    echo "<br>"."<br>";
    $yaz = next ($dizi);
    print_r($yaz);
    echo "<br>"."<br>";
    $yaz = prev ($dizi);
    print_r($yaz);
    echo "<br>"."<br>";
    $yaz = pos ($dizi);
    print_r($yaz);
    echo "<br>"."<br>";
/*elemanina ait verilere ulasmak iç isaretleyicileri kullanilmaktadir. Dizi içel ileri, geri, en son ve basa dön gibi isl gerçeklestirmek oldukça kolaydir.
isaretciler ile hareket ettirilmesi durur yeterli eleman sayisi yoksa sonuc bo:
olacaktir.*/

// Dizileri sayicilari

// count - sizeof Dizide yer alan eleman sayisini döndürür

$myList = array(6,3,4,5,6,4,5,4);
echo count($myList);
echo "<br>"."<br>";
echo sizeof($myList);
echo "<br>"."<br>";

// array_count_values
//Dizi degerleri anahtar olarak air ve degerlere rastlanma sikligini deger olarak içeren bir dizi ile döner.

echo count($myList);
echo "<br>"."<br>";
print_r( array_count_values($myList));
echo "<br>"."<br>";

// array_product Dizideki sayisal degerlerin çarpimini döndürür

echo array_product($myList);
echo "<br>"."<br>";
echo array_sum($myList);
echo "<br>"."<br>";


// array_sum Dizideki sayisal degerlerin toplamini döndürür

?>