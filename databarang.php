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
        /* navbar */

    *{
    margin: 0;
    padding: 0;
}

nav{
   width: 362px;
   height: 730px;
   left: 0;
   top: -30px;
   box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4);
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
    margin: 30px;
    font-weight: bold;
    font-style: italic;
    font-size: 40px;
    font-family: 'Bitter', serif;
    color: white;
}

.link a p{
    position: absolute;
    left: 100px;
    top: 137px;
    background-color: #D9D9D9;
    border-radius: 20px;
    padding: 10px 10px;
    text-align: center;
    margin-top: 80px;
    font-size: 20px;
    color: black;
    width: 150px;
    font-weight: bold;
}

.box{
    position: absolute;
    text-align: center;
    margin-left: 670px;
    margin-top: 150px;
    width:550px;
    border-radius: 10%;
    background-color: #D9D9D9;
    height: 450px;
    box-shadow: -3px -3px 2px rgba(0,0,0,0.4);

}

.box h3{
    text-align: center;
    font-family: Roboto;
    font-size: 30px;
    padding-top: 50px;
    padding: 10px;
    margin-top: 30px;
    font-family: 'Playfair Display', serif;
}

.kotak{
    margin-top: 50px;
    margin: 40px;
}

.kotak input{
    margin-left: 30px;
    margin-top: 30px;
}

.link-2 a p{
    position: absolute;
    left: 85px;
    top: 137px;
    background-color: #D9D9D9;
    border-radius: 20px;
    padding: 10px 10px;
    text-align: center;
    margin-top: 150px;
    font-size: 20px;
    color: black;
    margin-left: 15px;
    width: 150px;
    font-weight: bold;
}

a{
    color: white;
    text-decoration: none;
}

.link a p{
    font-family: 'Bitter', serif;
}

.link-2 a p{
    font-family: 'Bitter', serif;
}

.box p label input{
    border-radius: 20px;
    width: 250px; 
    height: 30px;  
    text-align: center; 
    margin-left: 50px;
    font-family: 'Bitter', serif;
    font-weight: bold;
}

.box input:nth-child(4){
    background-color: #0F3460;
    width: 100px;
    height:30px;
    border-radius: 15px;
    font-family: 'Bitter', serif;
    color: white;
}

.kotak p label{
    font-size: 20px;
    font-weight: bold;
    font-family: 'Quicksand', sans-serif;
}

.link a p:hover{
    background-color: #3D8361;
    transition: 0.5s;
}

.link-2 a p:hover{
    background-color: #3D8361;
    transition: 0.5;
}

.kotak input:nth-child(4):hover{
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
       <a href="tampilandatabarang.php"><p>Data Barang</p></a>
        </div>

        <div class="link-2">
        <a href="datasiswa/tampilandatasiswa.php"><p>Data siswa</p></a>
        </div>
    </nav>



   <div class="box">
   <form action="penyimpanan.php" method="post">
        <h3>Input Data Barang</h3>
        <div class="kotak">
        <p><label>Kode barang : <input required type="text" name="Kode_barang"></label></p>
        <p><Label>Nama barang : <input required type="text" name="Nama_barang"></Label></p>
        <p><label>Stock barang : <input required type="text" name="Stock_barang"></label></p>
        <input type="submit" name="simpan" value="simpan">
        </div>
    </form>  
   </div>
        
    

</body>
</html>