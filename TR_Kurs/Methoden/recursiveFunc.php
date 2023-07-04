<?php
    /*Bir fonksiyonun icinde yine kendisi bulunuyorsa bu fonksiyonlara
    Özyineli '(recursive) fonksiyon denilir.
    Fonksiyon içerisinde yer alan kosul ya da kosullar saglanana kadar, 
    tanimlanan fonksiyonun tekrar tekrar çalismasini sadlamaktadir.
    Özyinelemeli fonksiyon Kendi içerisinde ikiye ayrilmaktadir. 
    Bunlar; birekt ve endirekt recursive fonksivonlardir.*/

    proc();


    function proc() {
        // Bild von 0 bis 10 random Zahl.
        $num = rand(0,10);
        
        if($num == 5) {
            echo "Zahl ist 5";
        }
        else {
            proc();
        }
    }
?>