<?php
include 'koneksi.php'
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
    font-size: 35px;
    color: white;
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
    margin-left: 30px;
    width: 150px;
    font-family: 'Bitter', serif;
    font-weight: bold;

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
    color: black;
    margin-left: 30px;
    width: 150px;
    font-family: 'Bitter', serif;
    font-weight: bold;
}

.td{
        position: absolute;
        margin-left: 30%;
        top: 0;
        margin-top: 10%;

    }

    .td table th{
        background-color:#0F3460;
        width:170px;
        height: 50px;
        color: white;
        font-family: 'Quicksand', sans-serif;
    }

    .td h4 {
        background-color: #0F3460;
        margin-bottom: 4%;
        padding: 10px 10px;
        width: 100px;
        text-align: center;
        border-radius: 10px;
        margin-top: -20px;
    }

    .tombol tr td{
        height: 70px;
        text-align: center;
        font-family: 'Quicksand', sans-serif;
        color: black;
        font-weight: bold;
    }

    .tombol tr a:first-child{
    background-color: #FD841F;
    border-radius: 10px;
    width: 500px;
    height: 20px;
    padding: 5px 10px 5px 10px;
    font-size: 20px;
    color: white;
    font-family: 'Bitter', serif;
    
    }
    .tombol tr a:nth-child(2){
    background-color: red;
    border-radius: 10px;
    height:20px;
    font-size: 20px;
    color: white;
    padding: 5px 10px 5px 10px;
    font-family: 'Bitter', serif;
    }

    h3{
        margin-left: 800px;
        margin-top: 40px;
        font-size: 40px;
    }

    .td h4 a{
        font-family: 'Bitter', serif;
        font-size: 20px;
        color: white;
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
        <a href="#"><p>Data Siswa</p></a>
        </div>
    </nav>


<!-- <h3>Data siswa</h3> -->
<h3>Data Siswa</h3>
<div class="td">
<h4><a href="datasiswa.php">Create</a></h4>
<table border="1"; class="tombol">
    <tr>
        <th>Id_siswa</th>
        <th>Nama_siswa</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>TTL</th>
        <th>Action</th>
    </tr>
    <?php
    $sql ="SELECT * FROM data_siswa";
    $query = mysqli_query($connect, $sql);
    while ($pel = mysqli_fetch_array($query)){
        echo "
        <tr>
        <td>$pel[Id_siswa]</td>
        <td>$pel[Nama_siswa]</td>
        <td>$pel[Kelas]</td>
        <td>$pel[Jurusan]</td>
        <td>$pel[TTL]</td>
        <td>
        <a href='edit.php?Id_siswa=".$pel['Id_siswa']."'>Edit</a>
        <a href='delete.php?Id_siswa=".$pel['Id_siswa']."'>Hapus</a>
        </td>
        </tr>";
    }
    ?>

</table>
</div>

</body>
</html>

