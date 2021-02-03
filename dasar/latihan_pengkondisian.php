<?php

//6 - 10 pagi
//11 - 2 siang
//3 - 6 sore
//7 - 12 malam
//1 - 6 fajar

date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if($jam > "06.00" && $jam < "10.00"){
    $waktu = "pagi";
} elseif($jam >= "11.00" && $jam < "14.00"){
    $waktu = "siang";
} elseif($jam >= "14.00" && $jam < "18.00"){
    $waktu = "sore";
} elseif($jam >= "18.00" && $jam < "24.00"){
    $waktu = "malam";
} else{
    $waktu = "fajar";
}

echo "Selamat $waktu"

?>