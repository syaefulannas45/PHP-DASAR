<?php
//Recursive func adalah kemampuan func memanggil func dirinya sendiri

function factorialLoop(int $value): int{
     $total = 1;
     for ($i = 1; $i <= $value; $i++){
          $total *= $i;
     }

     return $total;
}

var_dump(factorialLoop(6));