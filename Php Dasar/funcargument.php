<?php

//Kita bisa mengirim informasi ke function yang kita ingin panggil
//Untuk melakukan hal tersebut, kita perlu menambahkan argument atau parameter di function yang sudah kita buat
//Cara membuat argument sama seperti cara membuat variabel
//Argument ditempatkan didalam kurung () dideklarasi function
//Argument bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma

function sayHello($name)
{
     echo "Hello $name" . PHP_EOL;
}

sayHello("Syaeful");

//Default Argument Value
//Fitur ini memungkinkan jika kita memanggil fnction tidak memasukan parameter, kita bisa menentukan data defaultnya apa

//Kode default arg value

function sayHello1($name = "Sheaa"){
     echo "Hello $name " . PHP_EOL;
}

sayHello1();
sayHello1("Syaeful");

//Kesalahan default argument value
//Default arg value bisa disimpan argument manapun
//Namun jika argument lebih dari satu, dan kita menyimpan default argumentt value diparameter awal, maka itu kurang berguna

//Kode kesalahan

// function sayHello2($firstName = "Sheaa", $lastName){
//      echo "Hello $firstName $lastName" . PHP_EOL;
// }
// sayHello2("Syaeful");


//Type Decralation

//Sama seperti variabel, argument php bisa kita masukkan data yang dinamis
//di php kita bisa menambahkan tipe data diargument, sehingga di php akan melakukan pengecekan ketika kita mengirim value ke function tersebut
//Jika tipe data value tidak sesuai , maka akan terjadi error,
//Secara default php akan melalukan percobaan konversi tipe data secara otomatis, misal kita jika menggunkan tipe int, tapi kita mengirim string, maka php otomatis mengkonverrsi string tersebut menjadi int

//Kode type Decrelation

function sum(int $first, int $last){
     $total = $first + $last;
     echo "Total $first + $last = $total" . PHP_EOL;
}
sum("100" , "100");
sum(100,100);
sum(true,false);
// sum([],[]);

//Variable-length Argument list

//Merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
//Secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke functionnya
//hanya bisa dilakukan diargument posisi terakhir
//Untuk membuat nya, kita bisa menggunakan ...(titik tiga kali) sebelum nama argument
function sumAll (...$values){
     $total = 0;
     foreach($values as $value){
          $total += $value;
     }
     echo "Total " . implode("+", $values) . "= $total" . PHP_EOL;
}
sumAll(10,20,30,40);
sumAll(...[10,20,30,40]);