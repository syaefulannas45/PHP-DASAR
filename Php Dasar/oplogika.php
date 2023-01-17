<?php

//Operator logika adalah operator untuk membandingkan dua nilai boolean

/* 
OPERATOR,NAMA,HASIL

$a && $b, and , true jika $a dan $b keduanya true

$a and %b, and, tru jika $a dan $b keduanya true

$a || $b, or , true jika $a dan $b salah satu atau keduanya true

$a or $b, or , true jika $a dan $b salah satu atau keduanya true

!$a , not , true jika $a bernilai false

$a xor %b , xor , true jika $a dan $b salah satu true, tapi tidak keduanya

*/

//Kode

var_dump(true && true);
var_dump(true && false);
var_dump(true || false);
var_dump(true xor false);
var_dump(!true);