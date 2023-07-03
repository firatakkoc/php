



<form action ="" method ="POST";>
<input type="text" name="isim"> <br>
<input type="text" name="soyisim"> <br><br>
<button>Verileri Gönder</button>
</form>

<?php
/* POST küresel degiskeni, sadece formlar üzerinde kullanilmaktadir.
GET küresel degiskeni gibi veri
göndermek ile görevlidir. GET metoduna göre güvenli bir veri gönderim tipidir.
POST Metodu HTML form verilerinin doldurulduktan
sonra gönderilmesi istenen sayfaya kullaniciya göstermeden arka planda gösterme isine yaramaktadir. */

if ($_POST) {
    $i = $_POST["isim"];
    $s = $_POST["soyisim"];
    echo $i." ".$s;

}


?>