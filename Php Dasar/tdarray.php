<?php

//Array adalah tipe data yang berisikan kosong atau banyak data
//Array di PHP bisa berisikan data dengan jenis yang berbeda-beda

$values = array(1,2,3,4);
var_dump($values);

$names = ["Syaeful","Annas"];
var_dump($names);

//Kode Oprasi Array

//Akses Array
var_dump($names[0]);
//Ubah value array
var_dump($names[0] = "Sheaa");
//Menghapus data array
unset($names[0]);
//Menambah data array
$names[] = "Sheaa";
//Menampilkan data array
var_dump ($names);
//Total data array
var_dump(count($names));


