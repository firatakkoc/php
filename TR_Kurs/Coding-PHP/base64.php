<?php
/*Bu sifreleme yöntemi, diger sifreleme yöntemlerinden farkli çalismaktadir. Diger sifreleme yöntemlerinden ayrdig farksa, sifrelenen deger tekrar eski haline cevrilebilir. Buda sifrelenen verinin tam olarak güvenli bir sekilde saklanmamasina neden olur.
Bir verivi sifrelemek icin base64 encode () fonksiyonu kullanilmaktadir. Sifrelenen veriyi tekrar eski haline getirmek içinse base64_decode () fonksiyonu kullanilmalidir.*/

$parola = "23142354235";

$sifrele = base64_encode($parola);
echo $sifrele."<br>";

$sifrecoz = base64_decode($sifrele);

echo $sifrecoz."<br>";


?>