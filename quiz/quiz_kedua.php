<?php

/* Tuliskan code untuk menampilkan, jika jam waktu shubuh, maka keluar text
"subuh" jika jam waktu ashar, maka keluar text "ashar", dan seterusnya sampai
isya */

date_default_timezone_set("Asia/Jakarta");
$waktu = date("H:i");

if($waktu >= "04.31" && $waktu <= "05.48"){
    $waktu = "Shubuh";
} elseif($waktu >= "12.07" && $waktu <= "15.28"){
    $waktu = "Dzuhur";
} elseif($waktu >= "15.28" && $waktu <= "18.20"){
    $waktu = "Ashar";
} elseif($waktu >= "18.20" && $waktu <= "19.33"){
    $waktu = "Maghrib";
} elseif($waktu >= "19.33" && $waktu <= "24.00"){
    $waktu = "Isya";
} else{
    $waktu = "None";
}

echo "$waktu"

?>