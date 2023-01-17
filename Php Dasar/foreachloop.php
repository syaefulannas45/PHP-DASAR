<?php

//Kadang kita biasa mengakses data array menggunakan perulangan
//Mengakses data array menggunakan sangat bertele-tele, kita harus membuat counter lalu mengakses array menggunakan counter yang kita buat
//Namun untungnya, di php terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data diarray secara otomatis

//Kode tanpa foreach
// $names = ["Syaeful" , "Annas", "Sheaa"];

// for ($i = 0 ; $i < count($names); $i++){
//      echo "Hello $names[$i]" . PHP_EOL;
// }

//Kode Foreach

$names = ["Sheyana", "Bagoes" , "Sabila"];
foreach ($names as $name){
     echo "Hello $name" . PHP_EOL;
}