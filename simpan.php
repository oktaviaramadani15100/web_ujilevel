<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $Nama_siswa = $_POST['Nama_siswa'];
    $kelas = $_POST['kelas'];
    $kode_barang = $_POST['kode_barang'];
    $Nama_barang = $_POST['Nama_barang'];
    $stock_barang = $_POST['stock_barang'];

    $sql = "UPDATE data_barang SET Nama_siswa='$Nama_siswa', kelas='$kelas', Nama_barang='$Nama_barang', stock_barang='$stock_barang' WHERE kode_barang='$kode_barang'";

    $query = mysqli_query($connect, $sql);
    
    if($query){
        header('Location: tampilandatasiswa.php');
    }else{
        header('Location: edit.php?status=gagal');
    }
}
?>
