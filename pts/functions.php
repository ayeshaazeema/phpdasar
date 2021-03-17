<?php

$db = mysqli_connect("localhost", "root", "", "db_phpdasar");

function get($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function create($post)
{
    global $db;

    $map = $post["kingdom_map"];
    $name = $post["kingdom_name"];
    $religion = $post["kingdom_religion"];
    $capital = $post["kingdom_capital"];

    $query = "INSERT INTO tb_kingdom VALUES(null, '$map', '$name', '$religion', '$capital')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function delete($id)
{
    global $db;
    $query = "DELETE FROM tb_kingdom WHERE kingdom_id = $id";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function update($data)
{
    global $db;

    $id = $data["kingdom_id"];
    $map = $data["kingdom_map"];
    $name = $data["kingdom_name"];
    $religion = $data["kingdom_religion"];
    $capital = $data["kingdom_capital"];

    $query = "UPDATE tb_kingdom SET 
    kingdom_map = '$map',
    kingdom_name = '$name',
    kingdom_religion = '$religion',
    kingdom_capital = '$capital'

    WHERE kingdom_id = $id";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
