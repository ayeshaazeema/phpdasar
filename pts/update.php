<?php

require 'functions.php';

$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

$id = $_GET["id"];

$kingdom = get("SELECT * FROM tb_kingdom WHERE kingdom_id = $id")[0];

if (isset($_POST["submit"])) {

    if (update($_POST) > 0) {

        echo "
            <script>
            alert('Data successfully updated!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        
        echo "
            <script>
            alert('Data failed to be updated!');
            </script>
        ";
    }

    echo mysqli_error($db);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Update Kingdom/Empire</h1>

    <form action="" method="post">

        <input type="hidden" name="kingdom_id" value="<?= $kingdom["kingdom_id"] ?>"></input>

        <label for="kingdom_map">Map : </label>
        <input type="text" name="kingdom_map" id="kingdom_map" required value="<?= $kingdom["kingdom_map"]; ?>"></input>
        <p>
            <label for="kingdom_name">Name : </label>
            <input type="text" name="kingdom_name" id="kingdom_name" required value="<?= $kingdom["kingdom_name"]; ?>"></input>
            <p>
                <label for="kingdom_religion">Religion : </label>
                <input type="text" name="kingdom_religion" id="kingdom_religion" required value="<?= $kingdom["kingdom_religion"]; ?>"></input>
                <p>
                    <label for="kingdom_capital">Capital : </label>
                    <input type="text" name="kingdom_capital" id="kingdom_capital" required value="<?= $kingdom["kingdom_capital"]; ?>"></input>
                    <p>
                        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>