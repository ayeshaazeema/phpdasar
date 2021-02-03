<?php

// ARRAY DI DALAM ARRAY
// array multidimensi

$siswa = [
    ["ayesha", "1234567890", "Teknik Informatika", "ayesha@gmail.com"],
    ["azeema", "1234567890", "RPL", "azeema@gmail.com"],
    ["eca", "1234567890", "IPA", "eca@gmail.com"]
];

// nyetak email eca
// echo $siswa[2][3];
// echo "<br>";
// echo $siswa[1][0];
// echo $siswa[0][2];

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
    <!-- list -->
    <ul>
    <?php foreach($siswa as $s): ?>
        <li>Nama: <?= $s[0];?></li>
        <li>NIM: <?= $s[1];?></li>
        <li>Jurusan: <?= $s[2];?></li>
        <li>Email: <?= $s[3];?></li>
        <br>
    <?php endforeach; ?>
    </ul>

    <?php foreach($siswa as $sw): ?>
        <br>
    <?php foreach($sw as $s): ?>
        <div> <?= $s?> </div>
    <?php endforeach; ?>
    <?php endforeach; ?>
</body>
</html>