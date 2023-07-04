<?php  

/*function exists
Fonksiyon'un var olup olmadigini kontrol etmek icini function_exists() fonksiyonu kullanilmaktadir. Bu fonksiyon tek bir parametre air ve aldigi paramtreye kontrol edilmesi istenen fonksiyonun ismi yazihir. Eger ismi yazilan fonksiyon varsa sonuc olarak TRUE degeri döndürülecektir.
Eger fonksiyon yoksa FALSE degeri döndürülecektir.*/

    function name() {
        echo "Firat";
    }

    if (function_exists("name")) {
        echo "name()  √ ";
    }
    else {
        echo "isim() X "; 
    }

?>