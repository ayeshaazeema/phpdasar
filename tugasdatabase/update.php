<?php

require 'functions.php';

$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

$id = $_GET["id"];

$country = get("SELECT * FROM tb_country WHERE country_id = $id")[0];

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
    <h1>Update Country</h1>

    <form action="" method="post">

        <input type="hidden" name="country_id" value="<?= $country["country_id"] ?>"></input>

        <label for="country_flag">Flag : </label>
        <input type="text" name="country_flag" id="country_flag" required value="<?= $country["country_flag"]; ?>"></input>
        <p>
            <label for="country_name">Name : </label>
            <input type="text" name="country_name" id="country_name" required value="<?= $country["country_name"]; ?>"></input>
            <p>
                <label for="country_language">Language : </label>
                <input type="text" name="country_language" id="country_language" required value="<?= $country["kingdom_religion"]; ?>"></input>
                <p>
                    <label for="country_capital">Capital City : </label>
                    <input type="text" name="country_capital" id="country_capital" required value="<?= $country["country_capital"]; ?>"></input>
                    <p>
                        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>