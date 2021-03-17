<?php

require 'functions.php';

if (isset($_POST["submit"])) {

    if (create($_POST) > 0) {

        echo "
            <script>
            alert('Data successfully added!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {

        echo "
            <script>
            alert('Data failed to be added!');
            document.location.href = 'index.php';
            </script>
        ";
    }
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
    <h1>Add Kingdom/Empire</h1>

    <form action="" method="post">

        <label for="kingdom_map">Map : </label>
        <input type="text" name="kingdom_map" id="kingdom_map"></input>
        <p>
            <label for="kingdom_name">Name : </label>
            <input type="text" name="kingdom_name" id="kingdom_name"></input>
            <p>
                <label for="kingdom_religion">Religion : </label>
                <input type="text" name="kingdom_religion" id="kingdom_religion"></input>
                <p>
                    <label for="kingdom_capital">Capital : </label>
                    <input type="text" name="kingdom_capital" id="kingdom_capital"></input>
                    <p>
                        <button type="submit" name="submit">Submit</button>

    </form>
</body>

</html>