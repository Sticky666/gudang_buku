<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penulis</title>
</head>

<body>
    <center>
        <div class="">
            <h2 class="my-2">Formulir Penulis</h2>

            <form action="input_penulis.php" method="POST">
                <table class="table-bordered">
                    <tr>
                        <td class="px-3">Nama Penulis</td>
                        <td class="px-3"><input type="text" name="nama_penulis" required></td>
                    </tr>
                    <tr>
                        <td class="px-3">Jenis Kelamin</td>
                        <td class="px-3">
                            <input type="radio" name="jk" value="L">Laki Laki
                            <input type="radio" name="jk" value="P">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td class="px-3">No. Telpon</td>
                        <td class="px-3"><input type="number" name="no_telp_penulis" id=""></td>
                    </tr>
                    <tr>
                        <td class="px-3">Email</td>
                        <td class="px-3"><input type="email" name="email_penulis"></td>
                    </tr>
                    <tr>
                        <td class="px-3">Alamat</td>
                        <td class="px-3">
                            <textarea name="alamat_penulis" id="" cols="23" rows="2"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="py-1">
                            <center>
                                <input type="submit" value="Tambah Penulis">
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
    </center>
</body>

</html>