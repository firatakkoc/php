<?php
    /*Global desisken olmakta birlikte bir form metodudur.
    Linklerden ya da form alanlarindan direkt çagrilabilir.
    GET Metodu ile bir deger, bir sayfadan baska bir sayfaya adres çubugu ile tasinir.
    Adres gubugundan degisken degerine müdahale edilebilir, kullanic tarafindan görüntülenebilir. Bu sebeple gizli verilerin GET methodu ile gönderilmesi önerilmez.*/

    // http://localhost:3000/Super_Variable/get.php?isim=Firat
    echo $_GET["isim"];
?>