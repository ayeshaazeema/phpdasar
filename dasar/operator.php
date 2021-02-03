<?php

//operator penggabung string
// .
$nama_depan = "ayesha";
$nama_belakang = "azeema";

echo $nama_depan . "" . $nama_belakang;
echo "<p>";

//operator aritmatika
// + - * / %
$x = 7;
$y = 2;
echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x/$y;
echo "<br>";
echo $x%$y;
echo "<br>";

//operator assignment
// =, +=, -=, *=, /=, %=, .=
$x = 10;
$x /= 5;
echo $x;
echo "<br>";

$nama = "aye";
$nama .= "eca";
echo $nama;
echo "<p>";

//operator perbandingan
// <, >, <=, >=, ==, !=
//var_dump = menampilkan informasi dari variable
var_dump(1 == "1");
echo "<p>";

//operator identitas
// ===, !==
var_dump(1 === "1");
echo "<p>";

//logika
// && || !
$x = 20;
// && (dan) = dua-duanya harus benar
var_dump($x <10 || $x % 2 == 0);
echo "<p>";

// || (atau) = salah satu benar gapapa
var_dump($x = 20 || $x/2 == 5);
echo "<p>";

?>