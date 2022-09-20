<?php
include 'koneksi.php';
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
    <h3>Data Barang</h3>
    <h4><a href="datasiswa">Create</a></h4>
    <table border="1">
        <tr>
            <th>Nama_siswa</th>
            <th>kelas</th>
            <th>kode_barang</th>
            <th>Nama_barang</th>
            <th>stock_barang</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM data_barang";
        $query = mysqli_query($connect, $sql);
        while ($pel = mysqli_fetch_array($query)){
            echo "
            <tr>
            <td>$pel[Nama_siswa]</td>
            <td>$pel[kelas]</td>
            <td>$pel[kode_barang]</td>
            <td>$pel[Nama_barang]</td>
            <td>$pel[stock_barang]</td>
            <td>
            <a href='edit.php?Nama_siswa=".$pel['Nama_siswa']."'>edit</a>
            <a href='delete.php?Nama_siswa=".$pel['Nama_siswa']."'>hapus</a>
            </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>