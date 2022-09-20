<?php
include 'koneksi.php';

$Nama_siswa = $_GET['Nama_siswa'];
$sql = "SELECT * FROM data_barang WHERE Nama_siswa='$Nama_siswa'";
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
        <h3>Input data</h3>
        <p><Label>Nama siswa : <input value="<?php echo $pel ['Nama_siswa']?>" required type="text" name="Nama_siswa"></Label></p>
        <p><label>kelas : <input value="<?php echo $pel ['kelas']?>" required type="text" name="kelas"></label></p>
        <p><label>kode barang : <input value="<?php echo $pel ['kode_barang']?>" required type="text" name="kode_barang"></label></p>
        <p><label>Nama barang : <input value="<?php echo $pel ['Nama_barang']?>" required type="text" name="Nama_barang"></label></p>
        <p><label>stock barang : <input value="<?php echo $pel ['stock_barang']?>" required type="text" name="stock_barang"></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>