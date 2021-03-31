<?php

// koneksi ke database
// (host, user, password, nama database)
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
    // ambil data dari tiap elemen dalam form
    $gambar = $post["gambar_siswa"];
    $nama = $post["nama_siswa"];
    $kelas = $post["kelas_siswa"];
    $email = $post["email_siswa"];

    // query insert data
    $query = "INSERT INTO tb_siswa VALUES(null, '$gambar', '$nama', '$kelas', '$email')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function delete($id)
{
    global $db;
    $query = "DELETE FROM tb_siswa WHERE id_siswa = $id";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function update($data)
{
    global $db;

    $id = $data["id_siswa"];
    $gambar = $data["gambar_siswa"];
    $nama = $data["nama_siswa"];
    $kelas = $data["kelas_siswa"];
    $email = $data["email_siswa"];

    $query = "UPDATE tb_siswa SET 
    gambar_siswa = '$gambar',
    nama_siswa = '$nama',
    kelas_siswa = '$kelas',
    email_siswa = '$email'

    WHERE id_siswa = $id";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}
