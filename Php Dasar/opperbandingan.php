<?php

//Op Perbandingan, digunakan untuk membandingkan dua buah value

/*
$a == $b, Sama dengan = true, jika $a dengan $b setelah dilakukan konversi tipe data

$a === $b , identik = true, jika $a sama degan $b dan memiliki tipe data yang sama

$a != $b, tidak sama dengan = true, jika $a tidak sama dengan $b setelah dilakukan tipe data

$a <> $b , tidak sama dengan = true, jika $a tidak sama dengan $b setelah dilakukan konversi tipe data

$a !== $b , tidak identik, true jika $a tidak sama dengan $b atau tidak sama tipe data

$a < $b, kurang dari , true jika $a kurang dari $b

$a <= $b, kurang dari atau sama dengan, true jika $kurang dari atau sama dengan $b

$a > $b, lebih dari, true jika $a lebih ari $b

$s >= $b , lebih dari sama dengan , true jika $a lebih dari atau sama dengan $b
*/

//Kode
var_dump("10" == 10);//true
var_dump("10" === 10);//false

var_dump(10 > 9);//true
var_dump(10 >= 10);//true
