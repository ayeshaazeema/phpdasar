<?php

require 'functions.php';

if (isset($_POST["submit"])) {

    if (add($_POST) > 0) {

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
    <h1>Add Country</h1>

    <form action="" method="post">

        <label for="country_flag">Flag : </label>
        <input type="text" name="country_flag" id="country_flag"></input>
        <p>
            <label for="country_name">Name : </label>
            <input type="text" name="country_name" id="country_name"></input>
            <p>
                <label for="country_language">Language : </label>
                <input type="text" name="country_language" id="country_language"></input>
                <p>
                    <label for="country_capital">Capital City : </label>
                    <input type="text" name="country_capital" id="country_capital"></input>
                    <p>
                        <button type="submit" name="submit">Submit</button>

    </form>
</body>

</html>