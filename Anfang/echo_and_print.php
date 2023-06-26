<?php

/* PHP'de "echo" ve "print" komutları, ekrana çıktı vermeyi sağlayan iki farklı işlevdir. 
İşlevsellikleri açısından benzer olsalar da aralarında bazı farklar vardır:

1- Dönüş Değeri: "echo" komutu, herhangi bir dönüş değeri olmadan ekrana çıktıyı yazdırır. 
Diğer yandan, "print" komutu çıktıyı ekrana yazdırdıktan sonra 1 değerini döndürür. 
Bu, "print" komutunun bir işlev olarak kullanılabileceği anlamına gelir, 
yani başka bir değişkene atayabilir veya ifadeler içinde kullanabilirsiniz.

2- Yazımı: "echo" komutu, genellikle parantezler olmadan kullanılır. 
Örneğin, echo "Merhaba"; şeklinde yazılabilir. "print" komutu ise parantezlerle kullanılır: 
print("Merhaba");. 
Bununla birlikte, "print" komutu da parantezsiz olarak kullanılabilir: print "Merhaba";.

3- Performans: Genel olarak, "echo" komutu "print" komutundan daha hızlıdır. 
Bunun nedeni, "echo" komutunun daha basit bir yapıya sahip olması ve ekstra bir dönüş değeri döndürmemesidir. 
Ancak, bu performans farkı genellikle ihmal edilebilir düzeydedir ve pratikte çok az fark yaratır.

*/

print "Firat <br>";
echo "Akkoc<br>";

$a = 1;
$b = 2;
$c = 3;



echo "a = ", $a, "<br> b = ",$b, "<br> c = ", $c;

?>