<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Kendaraan</title>
</head>
<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('index.php');</script>";
}
?>

<body>
    <h1>Sewa Kendaraan</h1>
    <h3>Form Edit Pengguna</h3>
    <form method="POST" action="update_asset.php">
        <?php 
              include "connection.php";
              $querry = "SELECT * FROM asset_kendaraan WHERE id_asset='$_GET[id]'";
              $pet=mysqli_query($db_connection,$querry);
              $data=mysqli_fetch_assoc($pet);
          ?>


        <table>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" value="<?= $data['harga']; ?>" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_kendaraan" value="<?= $data['nama_kendaraan']; ?>" required></td>
            </tr>
            <tr>
                <td>merek_kendaraan</td>
                <td><input type="text" name="merek_kendaraan" value="<?= $data['merek_kendaraan']; ?>" required></td>
            </tr>

            <tr>
                <td> jenis_kendaraan</td>
                <td>
                    <select name="jenis_kendaraan" id="">
                        <option value="">Choose</option>
                        <option value="compact" <?= ($data['jenis_kendaraan']=='compact')?'selected':'';?>>compact
                        </option>
                        <option value="sedan" <?= ($data['jenis_kendaraan']=='sedan')?'selected':'';?>>sedan</option>
                        <option value="sport" <?= ($data['jenis_kendaraan']=='sport')?'selected':'';?>>sport</option>
                        <option value="crossover" <?= ($data['jenis_kendaraan']=='crossover')?'selected':'';?>>crossover
                        </option>
                        <option value="mpv" <?= ($data['jenis_kendaraan']=='mpv')?'selected':'';?>>mpv</option>
                        <option value="suv" <?= ($data['jenis_kendaraan']=='suv')?'selected':'';?>>suv</option>
                        <option value="van" <?= ($data['jenis_kendaraan']=='van')?'selected':'';?>>van</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>deskripsi_kendaraan</td>
                <td>
                    <textarea name="deskripsi_kendaraan" required> <?= $data['deskripsi_kendaraan']; ?> </textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="id_asset" value="<?=$data['id_asset']?>">
                </td>
            </tr>
            <table>
    </form>
    <p><a href="read_asset.php">CANCEL</a></p>
</body>

</html>