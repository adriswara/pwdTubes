<?php include "session.php"; ?>
<?php include "header.php"; ?>

<h3>Change Asset Photo</h3>
<?php 
    include "connection.php";
    $query = "SELECT * FROM asset_kendaraan WHERE id_asset='$_GET[id]'";
    $pet=mysqli_query($db_connection,$query);
    $data=mysqli_fetch_assoc($pet);
    ?>
<form method="post" action="upload_kendaraan.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td></td>
            <td> <img src="img/<?= $data['display_kendaraan']; ?>" width="100" height="100" alt=""></td>
        <tr>
            <td>New Photo</td>
            <td>: <input type="file" name="new_photo" required /></td>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;
                <input type="submit" name="upload" value="UPLOAD" />
                <input type="hidden" name="display_kendaraan" value="<?= $data['display_kendaraan'];?>" />
                <input type="hidden" name="id_asset" value="<?= $data['id_asset']; ?>" />
            </td>
        </tr>
        </tr>
        </tr>
    </table>
</form>
<p><a href="read_asset.php">CANCEL</a></p>

<?php include "footer.php"; ?>