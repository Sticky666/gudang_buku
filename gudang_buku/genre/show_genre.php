<?php
include "../koneksi.php";
include "form_genre.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre</title>
</head>

<body class="container">
    <center>
        <h2>Genre</h2>
    </center>
    <div>
        <table class="table table-bordered table-secondary">
            <tr>
                <td>No</td>
                <td>Nama Genre</td>
                <td colspan="2">Aksi</td>
            </tr>

            <?php

            $sql          = "SELECT * FROM tb_genre";
            $sql_eksekusi = mysqli_query($koneksi, $sql);

            $no = 1;
            while ($data = mysqli_fetch_array($sql_eksekusi)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['nama_genre']; ?></td>
                    <td><a href="hapus_genre.php?id_genre=<?php echo $data['id_genre']; ?>" onClick="return confirm('Yakin Ingin Hapus Genre Tersebut?')">Hapus</a></td>
                    <td><a href="ubah_genre.php?id_genre=<?php echo $data['id_genre']; ?>">Ubah</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
        Pindah Ke Tabel Penulis?<a href="../penulis/show_penulis.php">Klik Disini</a><br>
        <br>
        Pindah Ke Tabel Penerbit?<a href="../penerbit/show_penerbit.php">Klik Disini</a>.
    </div>
</body>

</html>