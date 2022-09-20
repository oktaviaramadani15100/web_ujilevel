<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $Kode_barang= $_POST ['Kode_barang'];
    $Nama_barang = $_POST ['Nama_barang'];
    $Stock_barang = $_POST ['Stock_barang'];

    $sql = "INSERT INTO data_barang VALUES ('$Kode_barang', '$Nama_barang', '$Stock_barang')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilandatabarang.php');
    }else{
        header('Location: penyimpanan.php?status=gagal');
    }
}
?>