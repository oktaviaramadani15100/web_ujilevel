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
</head>
<body>
    <form action="simpan.php" method="post">
        <h3>Input data</h3>
        <p><Label>Kode barang : <input value="<?php echo $pel ['Kode_barang']?>" required type="text" name="Kode_barang"></Label></p>
        <p><label>Nama barang : <input value="<?php echo $pel ['Nama_barang']?>" required type="text" name="Nama_barang"></label></p>
        <p><label>Stock barang  : <input value="<?php echo $pel ['Stock_barang']?>" required type="text" name="Stock_barang"></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>