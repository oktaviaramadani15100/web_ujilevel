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
         body{
            margin: 0;
            padding: 0;
        }
nav{
    position: fixed;
    top: 0px;
   width: 400px;
   height: 750px;
   box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
   display: flex;
   float: left;
   background-color: #52C8C8;
}

nav .logo{
    height: 70px;
    width: 70px;
    border-radius: 50%;
    justify-content: center;
    background-color:white;
}


.profile {
    display: flex;
    height: fit-content;
    justify-content: center;
    align-items: center;
    padding-left: 30px;
    padding: 30px 0 0 30px;
}

.profile .nama1 {
    margin-top: 5px;
    margin-left: 30px;
    font-family: 'Roboto', sans-serif;
    margin: 30px;
    font-weight: bold;
    font-style: italic;
    font-size: 30px;
}

.link{
    position: absolute;
    left: 85px;
    top: 137px;
    background-color: #D9D9D9;
    border-radius: 20px;
    padding: 10px 10px;
    text-align: center;
    margin-top: 80px;
    font-size: 20px;
    color: #808080;
    margin-left: 20px;
}

a{
    text-decoration: none;
    color: black;
}

.link-2{
    position: absolute;
    left: 85px;
    top: 137px;
    background-color: #D9D9D9;
    border-radius: 30px;
    padding: 10px;
    text-align: center;
    margin-top: 170px;
    font-size: 20px;
    color: #808080;
    margin-left: 20px;
    width: 150px;
    height: 70px;
    font-weight: bold;
}

.box{
    position: absolute;
    text-align: center;
    margin-left: 570px;
    margin-top: 100px;
    width: 600px;
    border-radius: 10%;
    background-color: #D9D9D9;
    height: 550px;
    box-shadow: -3px -3px 2px rgba(0,0,0,0.4);
}

.box h3{
    text-align: center;
    font-family: Roboto;
    font-size: 30px;
    padding-top: 50px;
    padding: 10px;
    margin-top: 30px;
}

.kotak{
    margin-top: 50px;
    margin: 40px;
}

.kotak input{
    margin-left: 30px;
    margin-top: 30px;
}

    </style>
</head>
<body>
    <nav>
        <div class="profile">
            <div class="logo"></div>
            <div class="nama1">SARPRAS</div>
        </div>
       <div class="link">
        <a href="../tampilandatabarang.php"><p>Data Barang</p></a>
        </div>

        <div class="link-2">
        <a href="tampilandatasiswa.php"><p>Data siswa</p></a>
        </div>
    </nav>
    <div class="box">
    <form action="simpan.php" method="post">
    <h3>Input Data Siswa</h3>
    <div class="kotak">
        <p><label>Id siswa : <input required type="text" name="Id_siswa"></label></p>
        <p><Label>Nama siswa : <input required type="text" name="Nama_siswa"></Label></p>
        <p><label>Kelas : <input required type="text" name="Kelas"></label></p>
        <p><label>Jurusan : <input required type="text" name="Jurusan"></label></p>
        <p><Label>TTL : <input required type="text" name="TTL"></Label></p>
        <input type="submit" name="simpan" value="simpan">
    </div>
    </form>
    </div>
   
</body>
</html>