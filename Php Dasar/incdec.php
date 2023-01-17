<?php

//PHP mendukung gaya bahasa pemrograman C untuk menaikkan dan menurunkan data number sejumlah 1 angka

/* 

$a++ , post increment , kembalikan $a lalu naikkan 1 angka

++$a , pre increment , naikkan $a satu angka, lalu kembalikan $a

$a--, post decrement , kembalikan $a lalu turunkan 1 angka

--$a , pre decrement, turunkan $a satu angka, lalu kembalikan $a

*/

$a = 10;
$b = ++$a;

var_dump($b);
var_dump($a);