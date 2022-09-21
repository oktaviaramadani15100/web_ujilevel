<?php
include 'koneksi.php'
?>

<h4><a href="datasiswa.php">create</a></h4>
<table border="1";>
    <tr>
        <th>Id_siswa</th>
        <th>Nama_siswa</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>TTL</th>
        <th>Action</th>
    </tr>
    <?php
    $sql ="SELECT * FROM data_siswa";
    $query = mysqli_query($connect, $sql);
    while ($pel = mysqli_fetch_array($query)){
        echo "
        <tr>
        <td>$pel[Id_siswa]</td>
        <td>$pel[Nama_siswa]</td>
        <td>$pel[Kelas]</td>
        <td>$pel[Jurusan]</td>
        <td>$pel[TTL]</td>
        <td>
        <a href="">Edit</a>
        <a href="">Hapus</a>
        </td>
        </tr>";
    }
    ?>

</table>

