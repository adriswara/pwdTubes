<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sewa Kendaraan</title>
</head>

<body>
    <h1> Sewa Kendaraan</h1>
    <h3>Form Add Anggota</h3>
    <form method="POST" action="create_asset.php">
        <table>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_kendaraan" required></td>
            </tr>
            <tr>
                <td>merek_kendaraan</td>
                <td><input type="text" name="merek_kendaraan" required></td>
            </tr>

            <tr>
                <td> jenis_kendaraan</td>
                <td>
                    <select name="jenis_kendaraan" id="">
                        <option value="">Choose</option>
                        <option value="compact">compact</option>
                        <option value="sedan">sedan</option>
                        <option value="sport">sport</option>
                        <option value="crossover">crossover</option>
                        <option value="mpv">mpv</option>
                        <option value="suv">suv</option>
                        <option value="van">van</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>deskripsi_kendaraan</td>
                <td>
                    <textarea name="deskripsi_kendaraan" required></textarea>
                </td>
            </tr>


            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
            <table>
    </form>
    <p><a href="read_asset.php">CANCEL</a></p>
</body>

</html>