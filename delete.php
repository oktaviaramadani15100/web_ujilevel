<?php
include 'koneksi.php';

if(isset($_GET['Kode_barang'])){
    header('Location: tampilandatabarang.php');
}

$Kode_barang =$_GET['Kode_barang'];
$sql = "DELETE FROM data_barang WHERE Kode_barang='$Kode_barang'";
$query = mysqli_query($connect, $sql);

if($query){
    header('Location: tampilandatabarang.php');
}else{
    header('Location: delete.php?status=gagal');
}
?>