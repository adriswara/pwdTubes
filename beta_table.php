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
				<td><a href="order_asset.php?id=<?php echo $row->id_asset;?>" onclick="return confirm('Are You sure?')">Pesan
                Kendaraan</a></td>
			</tr>

		</table>


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