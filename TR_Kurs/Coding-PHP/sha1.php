<?php
/*Ulusal Güvenlik Ajansi (NSA) tarafindan tasarlanan ve Secure Hashing Algorithm olarak adlandirilan bu metot diger Sha algoritmalari içerisinde en vagin olarak kullanilanidir.
SHA1 algoritmasi ile sadece sifreleme islemi yapilmaktadir. MD5 gibi sifre cözümleme islemi yapilmamaktadir. MD5 ve SHA1 arasindaki en temel fark olusturduklariözetlerdeki boyutsal farkliliktir. SHA1 algoritmasi sifreleme sonucunda 40 haneli onaltilik bir say dizgesi üretmektedir.
Daha güvenli bir sifreleme yapabilmek için SHA1 ve MD5 ard arda kullanilmaktadir. Böylelikle daha güvenli bir sifreleme yapilmaktadir.*/

$sifr = sha1("firat akkoc");

echo $sifr;

?>