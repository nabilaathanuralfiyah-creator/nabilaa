<?php

$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_sterida"
);

if (!$koneksi) {
    die("Koneksi Database Gagal : " . mysqli_connect_error());
}

?>