<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Siswa</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f4f6f9;
    padding:40px;
}

.container{
    max-width:1100px;
    margin:auto;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

h2{
    color:#333;
}

.btn{
    background:#2563eb;
    color:white;
    padding:10px 15px;
    border-radius:8px;
    text-decoration:none;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
}

th{
    background:#2563eb;
    color:white;
    padding:12px;
}

td{
    padding:12px;
    border-bottom:1px solid #eee;
}

tr:hover{
    background:#f8fafc;
}

</style>

</head>
<body>

<div class="container">

<div class="header">
<h2>Data Siswa Sterida</h2>
<a href="index.php" class="btn">
+ Tambah Siswa
</a>
</div>

<table>

<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>NISN</th>
    <th>Gender</th>
    <th>Kelas</th>
    <th>Alamat</th>
</tr>

<?php

$data = mysqli_query(
    $koneksi,
    "SELECT * FROM siswa ORDER BY id DESC"
);

while($d = mysqli_fetch_assoc($data)){

?>

<tr>
    <td><?= $d['id']; ?></td>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['nisn']; ?></td>
    <td><?= $d['jenis_kelamin']; ?></td>
    <td><?= $d['kelas']; ?></td>
    <td><?= $d['alamat']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>