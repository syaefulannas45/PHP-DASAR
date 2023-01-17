<?php

//Pada switch statement, kita sudah mengenal kata kunci break , yaitu untuk menghentikan case dalam switch
//Sama dengan perulangan, break juga digunakan untuk menghentikan seluruh perulangan
//Namun berbeda dengan contionue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan keperulangan berikutnya

$count = 1;

while (true){
     echo "Hello break : " . $count . PHP_EOL;
     $count++;

     if($count > 10){
          break;
     }
}