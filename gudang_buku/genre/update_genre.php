<?php
include "../koneksi.php";

$id_genre = $_POST['id_genre'];
$nama_genre = $_POST['nama_genre'];

$sql = "UPDATE tb_genre SET nama_genre='$nama_genre' WHERE id_genre='$id_genre' ";
$sql_eksekusi = mysqli_query($koneksi, $sql);
if ($sql) {
    header("location:show_genre.php");
} else {
    echo "Gagal Mengubah data genre !";
}
