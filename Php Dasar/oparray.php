<?php

//Operator Aarray
//Di PHP, Array memiliki operator khusus

/* 

$a + $b , union , menggabungkan array $a dan $b

$a == $b, equality , true jika $a dan $b memiliki key-value sama

$a === $b , identity , true jika $a dan $b memiliki key-value sama dan posisi sam

$a != $b , inequality , true jika $a dan $b tidak sama

$a <> $b , inequality , true jika $a dan $b tidak sama

$a !== $b , nonidentity , true jika $a dan $b tidak indentik

*/

$first = ["first_name" => "Syaeful"];
$last = ["last_name" => "annas"];

var_dump($first + $last);