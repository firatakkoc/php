

<?php

/*Tanimsiz Parametre Nedir?
TANIMSIZ PARAMETRE
Tanimsiz parametreler, parametre girme gereksinimi olmayan yerlerde kontrolü saglamak icin kullanilmaktadir.
Kesin
parametre girisi yapilan fonksiyonlar disinda kullanilmaktadir.
Parametre girislerini dinamik hale getirmek icin tercih edilmektedir. Yalniz dinamik hale getirmek için bir çok kontrol gerceklestirileceqi icin cok fazla tercih edilmemektedir.

func_get_arg
Fonksiyona gönderilen argüman ya da argümanlardan belirlenen indis degerini döndürür.

func_get_args
Fonksiyona gönderilen argümanlari dizi olarak döndürür.

func_num_args
Fonksiyona gönderilen argüman sayisini belirtir.*/

    function ornek() {
        $param = func_num_args();
        echo $param;
    }

    ornek();
    ornek("Firat","Akkoc");

    function ornek2() {
        $param = func_num_args();
        if($param == 0) {
            echo "No Parameter";
        }
        if ($param == 1) {
            echo func_get_arg(0);
        }
        echo $param;
    }
    echo "<br>";
    ornek2();
    echo "<br>";
    ornek2("Firat");



?>