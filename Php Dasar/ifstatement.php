<?php

//If adalah kata kunci yang digunakan untuk percabangan

//Kode

$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75){
     echo "Anda lulus" . PHP_EOL;
}else {
     echo "Anda belum lulus";
}