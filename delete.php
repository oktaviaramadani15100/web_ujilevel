<?php
include 'koneksi.php';

if(isset($_GET['Nama_siswa'])){
    header('Location: tampilandatasiswa.php');
}

$Nama_siswa =$_GET['Nama_siswa'];
$sql = "DELETE FROM data_barang WHERE Nama_siswa='$Nama_siswa'";
$query = mysqli_query($connect, $sql);

if($query){
    header('Location: tampilandatasiswa.php');
}else{
    header('Location: delete.php?status=gagal');
}
?>