<?php

// ARRAY NUMERIK

// array = variable yang dapat menyimpan banyak nilai

// cara lama
$hari = array("senin", "selasa", "rabu");

// cara baru
$bulan = ["januari", "februari", "maret"];
// $bulan = ["januari", 123, true];

// var_dump($bulan);

// cara pemanggilan array
echo $bulan[0];
echo "<br";

// cara menambahkan elemen ke dalam array
$bulan[] = "april";
$bulan[] = "mei";

var_dump($bulan)

?>