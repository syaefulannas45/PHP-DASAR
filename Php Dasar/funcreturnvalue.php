<?php

//Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat function mengembalikan nilai
//Dan didalam block function , untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu di ikuti dengan data yang ingin dihasilkan
//Kita hanya bisa menghasilkan 1 data disebuah function, tidak bisa lebih dari satu

//Kode

function sum(int $first, int $second){
     return $first + $second;
}

$total = sum(10 , 10);
var_dump($total);

$total = sum(20,20);
var_dump($total);

//Return Type Decralations

//Sama seperti pada argument pada return value, kita bisa mendeklarasikan tipe datanya
//Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
//Untuk mendeklarasikan tipe data kembalian din func, setelah kurung() kita bisa tambahkan : di ikuti tipe data kembaliannya

//Kode

function sum1(int $first, int $second): int{
     return $first + $second;
}
function getFinalValue (int $value): string{
     
}