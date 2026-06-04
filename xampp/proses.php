<?php

include "koneksi.php";

$nama   = $_POST['nama'];
$nisn   = $_POST['nisn'];
$jk     = $_POST['jk'];
$kelas  = $_POST['kelas'];
$alamat = $_POST['alamat'];

$query = mysqli_query(
    $koneksi,
    "INSERT INTO siswa
    (nama,nisn,jenis_kelamin,kelas,alamat,tanggal_daftar)
    VALUES
    ('$nama','$nisn','$jk','$kelas','$alamat',CURDATE())"
);

if($query){
    header("Location: tampil.php");
}else{
    echo "Data gagal disimpan";
}

?>