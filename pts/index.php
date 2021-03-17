<?php

require 'functions.php';

$kingdom = get("SELECT * FROM tb_kingdom");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Kingdom/Empire<h1>
            <a href="create.php">Add Kingdom/Empire</a>
            <p>
                <table border="1" cellpadding="10" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Actions</th>
                        <th>Map</th>
                        <th>Name</th>
                        <th>Religion</th>
                        <th>Capital</th>
                    </tr>

                    <?php $i = 1; ?>

                    <?php foreach ($kingdom as $row) : ?>

                        <tr>
                            <td><?= $i; ?></td>

                            <td>
                                <a href="update.php?id=<?= $row["kingdom_id"]; ?>">Update | </a>
                                <a href="delete.php?id=<?= $row["kingdom_id"]; ?>">Delete</a>
                            </td>

                            <td><img src="img/<?= $row["kingdom_map"]; ?>" width="300"></td>
                            <td><?= $row["kingdom_name"]; ?></td>
                            <td><?= $row["kingdom_religion"]; ?></td>
                            <td><?= $row["kingdom_capital"]; ?></td>
                        </tr>

                        <?php $i++ ?>

                    <?php endforeach; ?>
                </table>
</body>

</html>