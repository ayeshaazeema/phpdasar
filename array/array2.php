<?php

// PENGULANGAN PADA ARRAY

$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: pink;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        /* ngasih jarak baris baru*/
        .clear{ clear: both; }
    </style>
</head>
<body>
    <!-- <div class="kotak"> 1 </div> -->

    <!-- pengulangan for pada array -->
    <?php for($i = 0; $i < 7; $i++){ ?>
        <div class="kotak"><?php echo $angka[$i]?></div>
    <?php } ?>

        <div class="clear"></div>

    <?php for($i = 0; $i < count($angka); $i++): ?>
        <div class="kotak"><?php echo $angka[$i]?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <!-- pengulangan foreach pada array -->
    <?php foreach($angka as $a) { ?>
        <div class="kotak"> <?php echo $a ?> </div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a): ?>
        <div class="kotak"> <?= $a ?> </div>
    <?php endforeach; ?>

</body>
</html>