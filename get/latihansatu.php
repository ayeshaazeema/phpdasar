<?php

// VARIABLE SUPER GLOBAL (variable dari php)
// tipe datanya array associative
// $_GET, $_POST, $_REQUEST, $_COOKIE, $_SESSION, $_SERVER, $_ENV, $GLOBALS

// GET ($_GET)
// ngirim data lewat url
// data tidak rahasia

// POST ($_POST)
// ngirim data lewat form
// login

// echo $_GET["nama"]="ayesha";
// echo "<br>";
// var_dump($_GET);

$mahasiswa = [
    ["nama" => "Ayesha", 
    "nrp" => "1234567890", 
    "jurusan" => "Teknik Informatika", 
    "email" => "ayesha@gmail.com"],

    ["nama" => "Azeema", 
    "nrp" => "0987654321", 
    "jurusan" => "Teknik Informatika", 
    "email" => "azeema@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <?php foreach($mahasiswa as $mhs): ?>

    <li>
        <a href="latihandua.php?
        nama=<?= $mhs["nama"];?>
        &nrp=<?= $mhs["nrp"];?>
        &jurusan=<?= $mhs["jurusan"];?>
        &email=<?= $mhs["email"];?>">

        <?= $mhs["nama"]; ?>
        
        </a>
    </li>

    <?php endforeach; ?>
</body>
</html>