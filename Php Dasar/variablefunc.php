<?php

//Variabel function adalah kemampuan memanggil sebuah func dari value yang dapat di sebuah variabel
//Untuk menggunakan variabel function kita bisa secara langsung memanggil $namaVariabel(),jika ingin menambahkan argument, kita bisa menggunakan $namaVariabel(argument)

function foo(){
     echo "fooo" . PHP_EOL;
}

function bar(){
     echo "BAR". PHP_EOL;
}

$functionName = "foo";
$functionName();

//Kode penggunaan variable function

function sayHello(string $name, $filter){
     $finalName = $filter($name);
     echo "Hello $finalName" . PHP_EOL;
}
sayHello("Syaeful", "strtoupper");
sayHello("Syaeful", "strtolower");