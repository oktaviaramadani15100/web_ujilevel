<?php
include 'koneksi.php';

$Id_siswa = $_GET['Id_siswa'];
$sql ="SELECT * FROM data_siswa WHERE Id_siswa='$Id_siswa'";
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

<!-- quicksand -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,300&family=Lato:wght@100&family=Lobster&family=Playfair+Display:ital@1&family=Quicksand:wght@300&family=Roboto:ital,wght@0,100;0,300;0,500;1,100&display=swap" rel="stylesheet">


    <style>
        .belajar{
            position: absolute;
            margin-top: 50px;
            margin-left: 630px;
            border-radius: 10%;
            background-color: #D9D9D9;
            width: 530px;
            height: 520px;
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
            font-size: 20px;
            font-family: 'Quicksand', sans-serif;
            font-weight: bold;
        }

        
        
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
   background-color:  #0F3460;
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
    margin-left: 20px;
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
    width: 150px;
}

a{
    color: white;
    text-decoration: none;
}

.link a p{
    font-family: 'Bitter', serif;
    font-weight: bold;
}

.link-2 a p{
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


.belajar h3{
    font-family:'Playfair Display', serif;
    font-size: 30px;
}

.belajar p label input{
    border-radius: 20px;
    width: 250px;
    height: 30px;
    text-align: center;
    margin-left: 50px;
    font-family: 'Bitter', serif;
    font-weight: bold;

}

.label input:nth-child(6){
    background-color:  #0F3460;
    border-radius: 20px;
    width: 120px;
    height: 30px;
    margin-left: 200px;
    color: white;
     font-family: 'Bitter', serif;

}

.label input:nth-child(6):hover{
    background-color: #3D8361;
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
       <a href="../tampilandatabarang.php"><p>Data Barang</p></a>
        </div>

        <div class="link-2">
        <a href="tampilandatasiswa.php"><p>Data siswa</p></a>
        </div>
    </nav>

    <div class="belajar">
    <form action="update.php" method="post">
    <h3>Input Data Siswa</h3>
    <div class="label">
        <p><label>Id siswa : <input value="<?php echo $pel ['Id_siswa']?>" required type="text" name="Id_siswa"></label></p>
        <p><Label>Nama siswa : <input value="<?php echo $pel ['Nama_siswa']?>" required type="text" name="Nama_siswa"></Label></p>
        <p><label>Kelas : <input value="<?php echo $pel ['Kelas']?>" required type="text" name="Kelas"></label></p>
        <p><label>Jurusan : <input value="<?php echo $pel ['Jurusan']?>" required type="text" name="Jurusan"></label></p>
        <p><Label>TTL : <input value="<?php echo $pel ['TTL']?>" required type="text" name="TTL"></Label></p>
        <input type="submit" name="simpan" value="simpan">
    </div>
    </form>
    </div>

</body>
</html>