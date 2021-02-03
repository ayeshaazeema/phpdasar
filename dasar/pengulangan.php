<?php

//for
/*
di dalam kurung ada 3
1. inisialisasi = variable awal
2. kondisi terminasi = memberhentikan pengulangan
3. increment decrement = menentukan pengulangannya maju atau mundur
*/

for($i = 10; $i < 10; $i++){
    echo "Hello!!<br>";
}

//while
//kalau kondisinya true lakukan yang di dalam {}
//cek kondisinya dulu, baru jalankan perintah

$f = 0;
while($f < 5){
    echo "Welcome<br>";
    $f++;
}

//do while
//lakukan pengulangan selama kondisinya true
//jalankan dulu, baru cek kondisi

$y = 0;
do{
    echo "ayesha!!<br>";
    $y++;
}while($y < 5);

?>