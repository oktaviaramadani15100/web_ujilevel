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
       <p>Data siswa & data barang</p>
        </div>
    </nav>

    

    <!-- tabel -->
<div class="td">
    <h4><a href="databarang.php">Create</a></h4>
        <table border="1";>
        <tr>
            <th>Nama_siswa</th>
            <th>kelas</th>
            <th>kode_barang</th>
            <th>Nama_barang</th>
            <th>stock_barang</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM data_barang";
        $query = mysqli_query($connect, $sql);
        while ($pel = mysqli_fetch_array($query)){
            echo "
            <tr>
            <td>$pel[Nama_siswa]</td>
            <td>$pel[kelas]</td>
            <td>$pel[kode_barang]</td>
            <td>$pel[Nama_barang]</td>
            <td>$pel[stock_barang]</td>
            <td>
            <a href='edit.php?Nama_siswa=".$pel['Nama_siswa']."'>edit</a>
            <a href='delete.php?Nama_siswa=".$pel['Nama_siswa']."'>hapus</a>
            </td>
            </tr>";
        }
        ?>
    </table>
</div>

    
    
        
</body>
</html>