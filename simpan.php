<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $Kode_barang = $_POST['Kode_barang'];
    $Nama_barang = $_POST['Nama_barang'];
    $Stock_barang = $_POST['Stock_barang'];
    

    $sql = "UPDATE data_barang SET  Nama_barang='$Nama_barang', Stock_barang='$Stock_barang' WHERE Kode_barang='$Kode_barang'";

    $query = mysqli_query($connect, $sql);
    
    if($query){
        header('Location: tampilandatabarang.php');
    }else{
        header('Location: edit.php?status=gagal');
    }
}
?>
