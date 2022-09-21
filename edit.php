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

    <style>
        .belajar{
            position: absolute;
            margin-top: 100px;
            margin-left: 550px;
            border-radius: 10%;
            background-color: #D9D9D9;
            width: 530px;
            height: 350px;
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

.link-2{
    position: absolute;
    left: 85px;
    top: 137px;
    background-color: #D9D9D9;
    border-radius: 20px;
    padding: 10px 10px;
    text-align: center;
    margin-top: 150px;
    font-size: 20px;
    color: #808080;
    margin-left: 20px;
}

a{
    color: white;
    text-decoration: none;
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
        <p><Label>Kode barang : <input value="<?php echo $pel ['Kode_barang']?>" required type="text" name="Kode_barang"></Label></p>
        <p><label>Nama barang : <input value="<?php echo $pel ['Nama_barang']?>" required type="text" name="Nama_barang"></label></p>
        <p><label>Stock barang  : <input value="<?php echo $pel ['Stock_barang']?>" required type="text" name="Stock_barang"></label></p>
        <input type="submit" name="simpan" value="simpan">
        
       
    </form>
    </div>
    
</body>
</html>