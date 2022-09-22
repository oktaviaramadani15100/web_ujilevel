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

    <!-- font-display -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Lobster&family=Playfair+Display:ital@1&family=Roboto:ital,wght@0,100;0,300;0,500;1,100&display=swap" rel="stylesheet">

<!-- font-bitter -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,300&family=Lato:wght@100&family=Lobster&family=Playfair+Display:ital@1&family=Roboto:ital,wght@0,100;0,300;0,500;1,100&display=swap" rel="stylesheet">

<!-- quicksand -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,300&family=Lato:wght@100&family=Lobster&family=Playfair+Display:ital@1&family=Quicksand:wght@300&family=Roboto:ital,wght@0,100;0,300;0,500;1,100&display=swap" rel="stylesheet">

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
   background-color: #0F3460;
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
    font-family: 'Bitter', serif;
    margin: 30px;
    font-weight: bold;
    font-style: italic;
    font-size: 40px;
    font-family: 'Bitter', serif;
    color: white;
}

.link a p{
    position: absolute;
}

.link p{
    position: absolute;
    left: 85px;
    top: 137px;
    background-color: #D9D9D9;
    border-radius: 20px;
    padding: 10px 10px;
    text-align: center;
    margin-top: 80px;
    font-size: 20px;
    color: black;
    margin-left: 20px;
    font-family: 'Bitter', serif;
    font-weight: bold;
    width:150px;

}

a{
    text-decoration: none;
    color: black;
}

.link-2 p{
    position: absolute;
    left: 85px;
    top: 137px;
    background-color: #D9D9D9;
    border-radius: 30px;
    padding: 10px;
    text-align: center;
    margin-top: 150px;
    font-size: 20px;
    color:black;
    margin-left: 20px;
    width: 150px;
    font-weight: bold;
    font-family: 'Bitter', serif;
}

.box{
    position: absolute;
    text-align: center;
    margin-left: 670px;
    margin-top: 50px;
    width: 600px;
    border-radius: 10%;
    background-color: #D9D9D9;
    height: 600px;
    box-shadow: -3px -3px 2px rgba(0,0,0,0.4);
}

.box h3{
    text-align: center;
    font-family: 'Playfair Display', serif;
    font-size: 30px;
    padding-top: 50px;
    padding: 10px;
    margin-top: 30px;
}

.kotak{
    margin-top: 50px;
    margin: 40px;
    font-size:20px;
    font-family: 'Bitter', serif;
    font-weight: bold;
}

.kotak label Input{
    margin-right: 20px;
    margin-top: 20px;
    border-radius:20px;
    width:250px;    
    height: 30px;
    margin-left: 50px;
    text-align: center;
    font-family: 'Bitter', serif;
    font-weight: bold;

}

.link a p:hover{
    background-color:  #3D8361;
    transition: 0.5s;
}

.link-2 a p:hover{
    background-color:  #3D8361;
    transition: 0.5;
}

.td h4:hover{
    background-color:  #3D8361;
    transition: 0.5;
}

.tombol td a:hover{
    background-color:  #3D8361;
    transition: 0.5;
}

.kotak input:nth-child(6){
    background-color: #0F3460;
    border-radius: 20px;
    width: 120px;
    height: 30px;
    margin-top:20px;
    color: white;
    font-family: 'Bitter', serif;
}

.kotak input:nth-child(6):hover{
    background-color: #3D8361;
    transition: 0.5;
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