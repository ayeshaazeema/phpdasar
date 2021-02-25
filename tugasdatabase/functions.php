<?php

$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function add($post)
{
    global $db;

    $flag = $post["country_flag"];
    $name = $post["country_name"];
    $language = $post["country_language"];
    $capital = $post["country_capital"];

    $query = "INSERT INTO tb_country VALUES(null, '$flag', '$name', '$language', '$capital')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
