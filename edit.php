<?php
include 'koneksi.php';

$Kode_barang = $_GET['Kode_barang'];
$sql = "SELECT * FROM data_barang WHERE Kode_barang='$Kode_barang'";
$query = mysqli_query($connect, $sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die("Data tidak ditemukan");

}
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

    <style>
        .belajar{
            position: absolute;
            margin-top: 100px;
            margin-left: 550px;
            border-radius: 10%;
            background-color: #D9D9D9;
            width: 530px;
            height: 400px;
            padding: 40px 40px;
            box-shadow: -3px -3px 2px rgba(0,0,0,0.4);
        }

        .belajar h3{
            text-align: center;
            height: 50px;
            padding-top: 30px;
        }

        .belajar p{
            margin-left:50px;
            margin: 40px;
            
        }

        .belajar input{
            margin-left: 30px;
        }


        
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
    font-family: 'Bitter', serif;
    margin: 30px;
    font-weight: bold;
    font-style: italic;
    font-size: 30px;
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
    font-weight: bold ;
    width: 150px;
}

.link-2 p{
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
    margin-left: 20px;
    font-weight: bold;
    width: 150px;
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

.link a p:hover{
    background-color: red;
    transition: 0.5s;
}

.link-2 a p:hover{
    background-color: red;
    transition: 0.5;
}

.td h4 a:hover{
    background-color: red;
    transition: 0.5;
}

.tombol td a:hover{
    background-color: blue;
    transition: 0.5;
}

.belajar h3{
    font-family:'Playfair Display', serif;
    font-size: 30px;
}

.belajar p label input{
    border-radius: 20px;
    width: 300px;
    height: 30px;
    text-align: center;
}


.tombol input:nth-child(4){
    background-color: red;
    width: 100px;
    height:30px;
    border-radius: 20px;
    margin-left: 230px;

}

.tombol input:nth-child(4):hover{
    background-color: blue;
    transition: 0.5s;
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

    <div class="belajar">
    <form action="simpan.php" method="post">
        <h3>Input Data Barang</h3>
        <div class="tombol">
        <p><Label>Kode barang : <input value="<?php echo $pel ['Kode_barang']?>" required type="text" name="Kode_barang"></Label></p>
        <p><label>Nama barang : <input value="<?php echo $pel ['Nama_barang']?>" required type="text" name="Nama_barang"></label></p>
        <p><label>Stock barang  : <input value="<?php echo $pel ['Stock_barang']?>" required type="text" name="Stock_barang"></label></p>
        <input type="submit" name="simpan" value="simpan">
        </div>
        
        
       
    </form>
    </div>
    
</body>
</html>