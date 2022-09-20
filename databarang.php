<?php
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../web_ujilevel/style.css">
    <title>Document</title>
</head>
<body>

<nav>
        <div class="profile">
            <div class="logo"></div>
            <div class="nama1">Aplikasi Name</div>
        </div>
       <div class="link">
       <p>Data siswa & data barang</p>
        </div>
    </nav>



    <div class="box">
          <form action="penyimpanan.php" method="post">
        <h3>Input Data</h3>
        <p><Label>Nama siswa : <input required type="text" name="Nama_siswa"></Label></p>
        <p><label>kelas : <input required type="text" name="kelas"></label></p>
        <p><label>kode barang : <input required type="text" name="kode_barang"></label></p>
        <p><label>Nama barang : <input required type="text" name="Nama_barang"></label></p>
        <p><label>stock barang : <input required type="text" name="stock_barang"></label></p>
        <input type="submit" name="simpan" value="simpan" class="">
    </form>  
    </div>

</body>
</html>