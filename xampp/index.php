<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pendaftaran Siswa</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f4f6f9;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.card{
    width:500px;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,.1);
}

h2{
    text-align:center;
    margin-bottom:20px;
    color:#333;
}

input,
select,
textarea{
    width:100%;
    padding:12px;
    margin-top:5px;
    margin-bottom:15px;
    border:1px solid #ddd;
    border-radius:8px;
}

button{
    width:100%;
    padding:12px;
    border:none;
    background:#2563eb;
    color:white;
    border-radius:8px;
    cursor:pointer;
    font-size:16px;
}

button:hover{
    background:#1d4ed8;
}

.link{
    text-align:center;
    margin-top:15px;
}

a{
    text-decoration:none;
    color:#2563eb;
}

</style>

</head>
<body>

<div class="card">

<h2>Pendaftaran Siswa Baru</h2>

<form method="POST" action="proses.php">

<label>Nama</label>
<input type="text" name="nama" required>

<label>NISN</label>
<input type="text" name="nisn" required>

<label>Jenis Kelamin</label>
<select name="jk">
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
</select>

<label>Kelas</label>
<input type="text" name="kelas" required>

<label>Alamat</label>
<textarea name="alamat"></textarea>

<button type="submit">
Simpan Data
</button>

</form>

<div class="link">
<a href="tampil.php">Lihat Data Siswa →</a>
</div>

</div>

</body>
</html>