<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Genre</title>
</head>

<body>
    <center>
        <h2>Formulir</h2>

        <form action="input_genre.php" method="POST">
            <table class="table-bordered">
                <tr>
                    <td class="px-3">Nama Genre</td>
                    <td class="px-3"><input type="text" name="nama_genre"></td>
                </tr>
                <tr>
                    <td colspan="2" class="py-1">
                        <center>
                            <input type="submit" value="Tambah Genre">
                        </center>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>