<?php

//Callback adalah sebuah mekanisme sebuah func memanggil function lainnya sesuai dengan yang diberikan di argumet
//untuk memanggil callback func tersebut, kita bisa menggunakan func call_user_func(callable,argmnts)


function sayHello(string $name, callable $filter){
     $finalName = call_user_func($filter, $name);
     echo "Hello $finalName" . PHP_EOL;
}
sayHello("Syaeful", fn($name) => strtoupper($name));