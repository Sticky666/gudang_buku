<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penerbit</title>
</head>

<body>
    <center>
        <div class="container my-3">
            <h2>Formulir Penerbit</h2>

            <form action="input_penerbit.php" method="POST">
                <table class="table-bordered">
                    <tr>
                        <td class="px-3">Nama Penerbit</td>
                        <td class="px-3"><input type="text" name="nama_penerbit" required></td>
                    </tr>
                    <tr>
                        <td class="px-3">No. Telpon</td>
                        <td class="px-3"><input type="number" name="no_telp_penerbit" id=""></td>
                    </tr>
                    <tr>
                        <td class="px-3">Email</td>
                        <td class="px-3"><input type="email" name="email_penerbit"></td>
                    </tr>
                    <tr>
                        <td class="px-3">Alamat</td>
                        <td class="px-3">
                            <textarea name="alamat_penerbit" id="" cols="23" rows="2"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="py-1">
                            <center>
                                <input type="submit" value="Tambah Penerbit">
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
    </center>
</body>

</html>