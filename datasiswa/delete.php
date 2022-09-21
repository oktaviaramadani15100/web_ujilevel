<?php
include 'koneksi.php';

if(isset($_GET['Id_siswa'])){
    header('Location: tampilandatasiswa.php');
}

$Id_siswa =$_GET['Id_siswa'];
$sql = "DELETE FROM data_siswa WHERE Id_siswa='$Id_siswa'";
$query = mysqli_query($connect, $sql);

if($query){
    header('Location: tampilandatasiswa.php');
}else{
    header('Location: delete.php?status=gagal');
}
?>