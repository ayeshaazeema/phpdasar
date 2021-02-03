<?php

//function = kumpulan instruksi yang dibungkus dalam sebuah blok

function biodata(){
    echo "ayesha<br>";
    echo "X Web<br>";
    echo "3, Juli 2005<br>";
}

biodata();
biodata();
echo "<p>";

//date
//menampilkan tanggal dengan format tertentu
/*
l = nama hari lengkap = wednesday
D = nama hari singkat = wed
d = tanggal = 19
m = bulan (angka) = 06
M = bulan (text singkat) = Jun
F = bulan (text) = Juni
y = tahun (singkat) = 21
Y = tahun = 2021
*/

date_default_timezone_set("Asia/Jakarta");
echo date ("H:i:s");
echo "<p>";

//time
//detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo "<p>";

echo date("l, d M y", time()+60*60*24*1000);
echo "<p>";

//strtotime = string ke waktu
echo date("l", strtotime("3 July 2005"));

?>