<?php

// ARRAY MULTIDIMENSI YANG ASOSIATIF

$siswa = [
    ["jurusan" => "Teknik Informatika", 
    "nama" => "ayesha", 
    "nim" => "1234567890", 
    "email" => "ayesha@gmail.com"],

    ["nama" => "azeema", 
    "nim" => "1234567890", 
    "jurusan" => "RPL", 
    "email" => "azeema@gmail.com"],

    ["nama" => "eca", 
    "nim" => "1234567890", 
    "jurusan" => "IPA", 
    "email" => "eca@gmail.com"]
];

// echo $siswa[0]["email"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <?php foreach($siswa as $s): ?>
        <ul>
        <li>Nama: <?= $s["nama"]?> </li>
        <li>Nim: <?= $s["nim"]?> </li>
        <li>Jurusan: <?= $s["jurusan"]?> </li>
        <li>Email: <?= $s["email"]?> </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>