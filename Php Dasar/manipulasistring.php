<?php

//Dot Operator

//Dot (titik) operator adalah operator yang bisa digunakan untuk menambah string dengan data lain (bisa string atau tipe data lainnya)

//Kode

$name = "Syaeful Annas";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai : " . 100 . "\n";

//Konversi ke Number dan sebaliknya

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueFloat = (float)"100.11";
var_dump($valueFloat);

//Mengakses karakter
$name = "Syaeful";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
