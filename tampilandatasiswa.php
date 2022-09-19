<?php
include "koneksi.php";
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
    <nav>
        <h3>Aplikasi Name</h3>
        <h4><a href="data barang">Data siswa</a></h4>
    </nav>
    
    <nav>
        <p>STARBHAK</p>
    </nav>

    <div class="tugas">
        <p>Create</p>
    </div>

    <table border ="1">
        <tr>
            <th>Nama_siswa</th>
            <th>kelas</th>
            <th>kode_barang</th>
            <th>Nama_barang</th>
            <th>stock_barang </th>
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
            <a href="edit">Edit</a>
            <a href="delete">Hapus</a>
           </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>