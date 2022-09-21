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

    <style>
        /* navbar */

    *{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

nav{
   width: 362px;
   height: 730px;
   left: 0;
   top: -30px;
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
    font-size: 25px;
}

.link{
    position: absolute;
    left: 79px;
    top: 137px;
    background-color: #D9D9D9;
    border-radius: 20px;
    padding: 10px 10px;
    text-align: center;
    margin-top: 80px;
    font-size: 20px;
    color: #808080;
}

.box{
    position: absolute;
    text-align: center;
    margin-left: 700px;
    margin-top: 200px;
    width:700px;
    border-radius: 500px;
    background-color: #D9D9D9;
    height: 350px;
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
            <div class="nama1">Aplikasi Name</div>
        </div>
       <div class="link">
       <p>Data Barang</p>
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