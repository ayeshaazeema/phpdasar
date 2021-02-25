<?php

require 'functions.php';

$country = query("SELECT * FROM tb_country");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Countries<h1>
            <a href="add.php">Add Country</a>
            <p>
                <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Flag</th>
                        <th>Name</th>
                        <th>Language</th>
                        <th>Capital City</th>
                    </tr>

                    <?php $i = 1; ?>

                    <?php foreach ($country as $row) : ?>

                        <tr>
                            <td><?= $i; ?></td>
                            <td><img src="img/<?= $row["country_flag"]; ?>" width="50"></td>
                            <td><?= $row["country_name"]; ?></td>
                            <td><?= $row["country_language"]; ?></td>
                            <td><?= $row["country_capital"]; ?></td>
                        </tr>

                        <?php $i++ ?>

                    <?php endforeach; ?>
                </table>
</body>

</html>