<?php

//Function adalah block kode program yang akan berjalan saat kita panggil
//Sebelumnya kita sudah menggunakan function isset(),count() dan lain lain
//Untuk membuat function di php , kita bisa menggunakan kata kunci function, lalu di ikuti dengan nama function, kurung () dan diakhiri dengan block
//Kita bisa memanggil function dengan nama function lalu diikuti dengan kurung()
//di bahasa pemrograman lain, function juga disebut dengan method

function sayHello()
{
     echo "Hello function" . PHP_EOL;
}

sayHello();

//Lokasi function

//Php sangat fleksibel dalam pembuatan function
//Tidak seperti bahasa pemrograman lain yang harus ada aturan lokasi dimana membuat function
//diphp kita bebas membuat function dimanapun, bisa dialam if statement, didalam function dan sebagainya
