<?php include "header.php"; ?>
<h3>List Kendaraan</h3>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=sewa_kendaraan",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM asset_kendaraan WHERE nama_kendaraan = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table border="1">
			<tr>
				<th>Id</th>
				<th>harga</th>
				<th>Nama Kendaraan</th>
				<th>Merek Kendaraan</th>
				<th>Jenis Kendaraan</th>
				<th>Deskripsi</th>
				<th>Image</th>
				<th>Pesan</th>
			</tr>
			<tr>
                <td><?php echo $row->id_asset;?></td>
				<td><?php echo $row->harga; ?></td>
                <td><?php echo $row->nama_kendaraan;?></td>
                <td><?php echo $row->merek_kendaraan;?></td>
                <td><?php echo $row->jenis_kendaraan;?></td>
				<td><?php echo $row->deskripsi_kendaraan;?></td>
				<td><img src="img/<?php echo $row->display_kendaraan;?>" width="50" height="50" alt=""></td>
				<td><a href="order_asset.php?id=<?php $row->id_asset?>" onclick="return confirm('Are You sure?')">Pesan
                Kendaraan</a></td>
			</tr>

		</table>
	<?php 
	}
		else{
			echo "Name Does not exist";
		}
}

else{
	?>






<table border="1">
    <tr>
        <th>Id</th>
        <th>harga</th>
        <th>Nama Kendaraan</th>
        <th>Merek Kendaraan</th>
        <th>Jenis Kendaraan</th>
        <th>Deskripsi</th>
		<th>Image</th>
		<th>Pesan</th>
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
        <td><a href="order_asset.php?id=<?=$data['id_asset']?>" onclick="return confirm('Are You sure?')">Pesan
                Kendaraan</a></td>
    </tr>
    <?php endforeach ?>
</table>

<?php 
}
?>

<?php include "footer.php"; ?>