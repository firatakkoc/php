<?php

var_dump(preg_match('/\d*/', 'Hallo 123 Welt...', $matches));


/*

/*: Steht für null oder mehr Wiederholungen.

Beispiel: ab*c => "ac", "abc", "abbc", "abbbc", ...
+: Steht für eine oder mehrere Wiederholungen.

Beispiel: ab+c => "abc", "abbc", "abbbc", ...
/?: Steht für null oder eine Wiederholung.

Beispiel: ab?c => "ac", "abc"
{n}: Steht für genau n Wiederholungen.

Beispiel: a{3} => "aaa"
{n,}: Steht für mindestens n Wiederholungen.

Beispiel: a{2,} => "aa", "aaa", "aaaa", ...
{n,m}: Steht für mindestens n und höchstens m Wiederholungen.

Beispiel: a{2,3} => "aa", "aaa"

*/