<?php

//Switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya

$nilai = "A";

switch ($nilai) {
     case "A" :
          echo "Anda lulus dengan sangat baik" . PHP_EOL;
          break;
     case "B" :
     case "C" : 
          echo "Anda lulus" . PHP_EOL;
     case "D" :
          echo "Anda tidak lulus" . PHP_EOL;
          break;
     default :
     echo "Mungkin anda salah jurusan" .PHP_EOL;
}