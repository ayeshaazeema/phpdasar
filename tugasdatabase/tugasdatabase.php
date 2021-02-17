<?php

$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

$result = mysqli_query($db, "SELECT * FROM tb_country");

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
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Country Flag</th>
                    <th>Country Name</th>
                    <th>Language</th>
                    <th>Capital City</th>
                </tr>

                <?php $i = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>

                    <tr>
                        <td><?= $i; ?></td>
                        <td><img src="img/<?= $row["country_flag"]; ?>" width="50"></td>
                        <td><?= $row["country_name"]; ?></td>
                        <td><?= $row["country_language"]; ?></td>
                        <td><?= $row["country_capital"]; ?></td>
                    </tr>

                    <?php $i++ ?>
                <?php endwhile; ?>
            </table>
</body>

</html>