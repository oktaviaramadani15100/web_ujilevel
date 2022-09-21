<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
<nav>
        <div class="profile">
            <div class="logo"></div>
            <div class="nama1">Aplikasi Name</div>
        </div>
       <div class="link">
        <a href="tampilandatabarang.php"><p>Data Barang</p></a>
        </div>

        <div class="link-2">
        <a href="datasiswa/tampilandatasiswa.php"><p>Data siswa</p></a>
        </div>
    </nav>
    <form action="simpan.php" method="post">
    <h3>Input Data Siswa</h3>
    <p><label>Id siswa : <input required type="text" name="Id_siswa"></label></p>
    <p><Label>Nama siswa : <input required type="text" name="Nama_siswa"></Label></p>
    <p><label>Kelas : <input required type="text" name="Kelas"></label></p>
    <p><label>Jurusan : <input required type="text" name="Jurusan"></label></p>
    <p><Label>TTL : <input required type="text" name="TTL"></Label></p>
    <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>