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
</head>
<body>
<form action="simpan.php" method="post">
    <h3>Input Data Siswa</h3>
    <p><label>Id siswa : <input value="<?php echo $pel ['Id_siswa']?>" required type="text" name="Id_siswa"></label></p>
    <p><Label>Nama siswa : <input value="<?php echo $pel ['Nama_siswa']?>" required type="text" name="Nama_siswa"></Label></p>
    <p><label>Kelas : <input value="<?php echo $pel ['Kelas']?>" required type="text" name="kelas"></label></p>
    <p><label>Jurusan : <input value="<?php echo $pel ['Jurusan']?>" required type="text" name="Jurusan"></label></p>
    <p><Label>TTL : <input value="<?php echo $pel ['TTL']?>" required type="text" name="TTL"></Label></p>
    <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>