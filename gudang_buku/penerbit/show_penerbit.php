<?php
include "../koneksi.php";
include "form_penerbit.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerbit</title>
</head>

<body>
    <center>
        <h2>Show Penerbit</h2>
    </center>
    <div class="container">
        <table class="table table-bordered table-secondary">
            <tr>
                <td>NO.</td>
                <td>Nama Penerbit</td>
                <td>No. Telpon</td>
                <td>Email Penerbit</td>
                <td>Alamat</td>
                <td colspan="2">Aksi</td>
            </tr>
            <?php
            $sql = "SELECT * FROM tb_penerbit";
            $sql_eksekusi = mysqli_query($koneksi, $sql);
            $no = 1;
            while ($data = mysqli_fetch_array($sql_eksekusi)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_penerbit']; ?></td>
                    <td><?php echo $data['no_telp_penerbit']; ?></td>
                    <td><?php echo $data['email_penerbit']; ?></td>
                    <td><?php echo $data['alamat_penerbit']; ?></td>
                    <td><a href="hapus_penerbit.php?id_penerbit=<?php echo $data['id_penerbit']; ?>" onClick="return confirm('Yakin Ingin Hapus Penerbit Tersebut?')">Hapus</a></td>
                    <td><a href="ubah_penerbit.php?id_penerbit=<?php echo $data['id_penerbit']; ?>">Update</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
        Pindah Ke Tabel Genre? <a href="../genre/show_genre.php">Klik Disini</a>.<br>
        <br>
        Pindah Ke Tabel Penulis? <a href="../penulis/show_penulis.php">Klik Disini</a>.
    </div>
</body>

</html>