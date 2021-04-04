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

function delete($id)
{
    global $db;
    $query = "DELETE FROM tb_country WHERE country_id = $id";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function update($data)
{
    global $db;

    $id = $data["country_id"];
    $flag = $data["country_flag"];
    $name = $data["country_name"];
    $language = $data["country_language"];
    $capital = $data["country_capital"];

    $query = "UPDATE tb_country SET 
    country_flag = '$flag',
    country_name = '$name',
    country_language = '$language',
    country_capital = '$capital'

    WHERE country_id = $id";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function search($keyword){
    $query = "SELECT * FROM tb_country WHERE
    country_name LIKE '%$keyword%' OR
    country_language LIKE '%$keyword%' OR
    country_capital LIKE '%$keyword%' ";

    return get($query);
}
