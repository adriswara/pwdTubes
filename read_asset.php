<?php include "session.php"; ?>
<?php include "header.php"; ?>
<h3>List Kendaraan</h3>
<p><a href="add_asset.php"> Add New Kendaraan</a></p>
<table border="1">
    <tr>
        <th>Id</th>
        <th>harga</th>
        <th>Nama Kendaraan</th>
        <th>Merek Kendaraan</th>
        <th> Jenis Kendaraan</th>
        <th>Deskripsi</th>
        <th colspan="2">Action</th>
    </tr>

    <?php 
        include "connection.php";
        $query = "SELECT * FROM asset_kendaraan";
        $pets = mysqli_query($db_connection,$query);
        
        $i = 1;
        foreach ($pets as $data) :
        ?>

    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td><?php echo $data['nama_kendaraan']; ?></td>
        <td><?php echo $data['merek_kendaraan']; ?></td>
        <td><?php echo $data['jenis_kendaraan']; ?></td>
        <td><?php echo $data['deskripsi_kendaraan']; ?></td>
        <td align="center"><img src="img/<?= $data['display_kendaraan'];?>" width="50" height="50" alt=""><br>
            <a href="display_kendaraan.php?id=<?=$data['id_asset']?>">Change Photo</a>
        </td>
        <td><a href="edit_asset.php?id=<?=$data['id_asset']?>">Edit Kendaraan</a></td>
        <td><a href="delete_asset.php?id=<?=$data['id_asset']?>" onclick="return confirm('Are You sure?')">Delete
                Kendaraan</a></td>
    </tr>
    <?php endforeach ?>
</table>
<p><a href="admin_dashboard.php">Back to Home</a></p>


<?php include "footer.php"; ?>