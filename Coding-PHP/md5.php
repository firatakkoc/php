<?php
    /*MD5, asimetrik bir sifreleme sistemidir. Verinin aslini ortaya cikarmadan, baska bir veriyle karsilastirmak için kullanilir. Hari ve sayilardan meydana gelir.
    Sifrelenecek olan verideki en ufak bir degisiklik, tüm MD5 verisininin bastan asagi degismesine neden olacaktir. Bunun yani sira bir veri degismedigi surece ayni MD5 verisini üretecektir.
    MD5 çiktisi asimetrik oldugu için, sifrelenen veriyi elde etmenin bir yolu yoktur.
    Ama deneme-yanilma saldirisi ile rasgele Üretilen verilerin sifrelenip eldeki
    MD5 verisi ile karsilastirilmasi yoluyla sifrelenen veri elde edilebilir.
    MD5 algoritmas ile üretilen veriler, 128 bit (16 Bayt) karmasikliga sahiptir.*/

    $sifrele = md5("Firat Akkoc");

    echo $sifrele;
?>