<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $Id_siswa= $_POST ['Id_siswa'];
    $Nama_siswa= $_POST['Nama_siswa'];
    $Kelas= $_POST['Kelas'];
    $Jurusan= $_POST['Jurusan'];
    $TTL= $_POST['TTL'];

    $sql = "INSERT INTO data_siswa VALUE ('$Id_siswa', '$Nama_siswa', '$Kelas', '$Jurusan', '$TTL')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilandatasiswa.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }

}
?>