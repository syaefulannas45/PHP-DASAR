<?php

//For adalah kata kunci yang bisa digunan untuk melakukan perulangan
/* 
for(init statement; kondisi ; post statement){
     block perulangan
}
*/

//Init statement akan dieksesusi hanya sekali diawal sebelum perulangan
//Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
//Post statement akan diekseskusi setiap kali diakhir perulangan
//init statement, kondisi dan post statement wajib di isi, berarti kondisi selalu bernilai true

//Perulangan dengan kondisi



for($count = 1; $count <= 10; $count++){
     echo "Hello for loop : " . $count . PHP_EOL;
     
}