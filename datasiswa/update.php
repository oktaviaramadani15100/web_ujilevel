<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $Id_siswa = $_POST['Id_siswa'];
    $Nama_siswa = $_POST['Nama_siswa'];
    $Kelas = $_POST['Kelas'];
    $Jurusan = $_POST['Jurusan'];
    $TTL = $_POST['TTL'];

    $sql = "UPDATE data_siswa SET Nama_siswa='$Nama_siswa', Kelas='$Kelas', Jurusan='$Jurusan', TTL='$TTL' WHERE Id_siswa='$Id_siswa'";

    $query= mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilandatasiswa.php');
    }else{
        header('Location: edit.php?status=gagal');
    }
}
?>