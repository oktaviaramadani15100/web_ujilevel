<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $Nama_siswa = $_POST ['Nama_siswa'];
    $kelas = $_POST ['kelas'];
    $kode_barang = $_POST ['kode_barang'];
    $Nama_barang = $_POST ['Nama_barang'];
    $stock_barang = $_POST ['stock_barang'];

    $sql = "INSERT INTO data_barang VALUES ('$Nama_siswa', '$kelas', '$kode_barang', '$Nama_barang', '$stock_barang')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilandatasiswa.php');
    }else{
        header('Location: penyimpanan.php?status=gagal');
    }
}
?>