<?php


//Arrow func diperkenalkan di php 7.4, sebagai alternatif anonymus func yang lebih sederhana pembuatannya
//Pembuatan arrow func tidak menggunakan kata func, melainkan fn
//Arrow functin dikhususnya untuk pembuatan function yang sederhana
$firstName = "Syaeful";
$lastName = "Annas";

$sayHello = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $sayHello();