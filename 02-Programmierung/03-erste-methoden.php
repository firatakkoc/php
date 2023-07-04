<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funktionen</title>
    <style>
        body {
            font-size: 30px;
        }
    </style>
</head>

<body>
    <pre> <?php
            function myEcho()
            {
                echo "Hallo Function!\n";
            }

            myEcho();
            var_dump('Hello');
            var_dump(123);
            var_dump(42.123);
            $irgendeineVariable = "Hallöchen";
            var_dump($irgendeineVariable);
            /* var_dump() fonksiyonu, PHP'de hata ayıklama ve değişkenlerin
            değerlerini inceleme amaçlarıyla kullanılan bir fonksiyondur. 
            Bu fonksiyon, bir veya daha fazla değişkenin değerini ve veri 
            türünü ayrıntılı bir şekilde ekrana yazdırır.
            string(5) "Hello"
            int(123)
            float(42.123)
            string(10) "Hallöchen"
            */

            $varZahl = strlen("Hallo Welt");
            echo $varZahl;
            echo "\n";
            echo strlen("Test");
            /* fonksiyonu, bir dize (string) içindeki karakterlerin sayısını döndüren bir PHP fonksiyonudur. 
            Bu fonksiyon, bir dizenin uzunluğunu (karakter sayısını) hesaplamak için kullanılır.*/
            ?></pre>
</body>

</html>