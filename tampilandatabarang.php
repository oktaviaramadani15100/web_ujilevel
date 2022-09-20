<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Lobster&family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Lobster&family=Roboto:ital,wght@0,100;0,300;0,500;1,100&display=swap" rel="stylesheet">

<style>
    .td{
        position: absolute;
        margin-left: 30%;
        top: 0;
        margin-top: 10%;
    }

    .td table th{
        background-color: #52C8C8;
    }

    .td h4{
        background-color: #52C8C8;
        margin-bottom: 4%;
        padding: 10px 10px;
        width: 15%;
        text-align: center;
        border-radius: 10px;
    }

    .link{
        font-size: 15px;    
        color: #808080;
        height: 20px;
        width: 210px;
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
    height: 50px;
    width: 50px;
    border-radius: 50%;
    justify-content: center;
    z-index: 2;
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
    font-size: 35px;
}

.link{
    position: absolute;
    left: 79px;
    top: 137px;
    background-color: #D9D9D9;
    border-radius: 20px;
    height: 30px;
    width: 200px;
    text-align: center;
    margin-top: 80px;
    font-size: 20px;

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

    

    <!-- tabel -->
<div class="td">
    <h4><a href="databarang.php">Create</a></h4>
    <table border="1";>
        <tr>
            <th>Kode_barang</th>
            <th>Nama_barang</th>
            <th>Stock_barang</th>
            <th>action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM data_barang";
        $query = mysqli_query($connect, $sql);
        while ($pel = mysqli_fetch_array($query)){
            echo "
            <tr>
            <td>$pel[Kode_barang]</td>
            <td>$pel[Nama_barang]</td>
            <td>$pel[Stock_barang]</td>
            <td>
            <a href='edit.php?Kode_barang=".$pel['Kode_barang']."'>edit</a>
            <a href='delete.php?Kode_barang=".$pel['Kode_barang']."'>hapus</a>
            </td>
            </tr>";
        }
        ?>
    </table>
</div>

    
    
        
</body>
</html>