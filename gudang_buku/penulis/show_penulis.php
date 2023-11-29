<?php
include "../koneksi.php";
include "form_penulis.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penulis</title>
</head>

<body>
    <center>
        <h2 class="my-1">Show Penulis</h2>
    </center>
    <div class="container">
        <table class="table table-bordered table-secondary">
            <tr>
                <td>NO.</td>
                <td>Nama Penulis</td>
                <td>Jenis Kelamin</td>
                <td>No. Telpon</td>
                <td>Email Penulis</td>
                <td>Alamat</td>
                <td colspan="2">Aksi</td>
            </tr>
            <?php
            $sql = "SELECT * FROM tb_penulis";
            $sql_eksekusi = mysqli_query($koneksi, $sql);
            $no = 1;
            while ($data = mysqli_fetch_array($sql_eksekusi)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_penulis']; ?></td>
                    <td><?php echo $data['jk']; ?></td>
                    <td><?php echo $data['no_telp_penulis']; ?></td>
                    <td><?php echo $data['email_penulis']; ?></td>
                    <td><?php echo $data['alamat_penulis']; ?></td>
                    <td><a href="hapus_penulis.php?id_penulis=<?php echo $data['id_penulis']; ?>" onClick="return confirm('Yakin Ingin Hapus Penulis Tersebut?')">Hapus</a></td>
                    <td><a href="ubah_penulis.php?id_penulis=<?php echo $data['id_penulis']; ?>">Update</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
        Pindah Ke Tabel Genre? <a href="../genre/show_genre.php">Klik Disini</a>.<br>
        <br>
        Pindah Ke Tabel Penerbit? <a href="../penerbit/show_penerbit.php">Klik Disini</a>.
    </div>
</body>

</html>