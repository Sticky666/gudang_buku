<?php
include "../koneksi.php";

$nama_penerbit = $_POST['nama_penerbit'];
$no_telp_penerbit = $_POST['no_telp_penerbit'];
$email_penerbit = $_POST['email_penerbit'];
$alamat_penerbit = $_POST['alamat_penerbit'];

$sql = "INSERT INTO tb_penerbit (nama_penerbit, no_telp_penerbit, email_penerbit, alamat_penerbit) VALUES ('$nama_penerbit', '$no_telp_penerbit', '$email_penerbit', '$alamat_penerbit')";
$sql_eksekusi = mysqli_query($koneksi, $sql);
if ($sql_eksekusi) {
?>
    <!--Awal Modal 1 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

    <!-- Modal 1 -->
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                    <h1 h1 class="modal-title fs-5" id="exampleModalLabel">Berhasil !</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Input Penerbit Berhasil !
                </div>
                <div class="modal-footer">
                    <a href="show_penerbit.php" class="btn btn-primary">Kembali Ke Halaman Show</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {})
        myModal.show()
    </script>
    <!--Akhir Modal 1-->
<?php
} else {
    echo "Gagal Menambah Penerbit!";
}
