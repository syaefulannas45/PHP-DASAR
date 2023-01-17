<?php

//Anonymus func adalah func tanpa nama, di php disebut sebagai closure
//Anonymus func biasanya di gunakan sebagai argument atau disebut value divariable
//Anonymus func membuat kita bisa mengirim func sebagai argument di func lainnya

$sayHello = function(string $name){
     echo "Hello $name" . PHP_EOL;
}
$sayHello("Syaeful");