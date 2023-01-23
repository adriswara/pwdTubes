<?php include "header.php"; ?>

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
	$sth = $con->prepare("SELECT ak.nama_kendaraan,ak.merek_kendaraan,ak.lokasi_kendaraan,ak.jenis_kendaraan,ak.deskripsi_kendaraan,p.alamat_pemesanan,p.durasi_pemesanan,p.email_pemesanan,p.id_asset,p.id_pemesanan,p.lokasi_pengambilan,p.metode_pembayaran,p.nama_pemesanan,p.no_telfon_pemesanan,p.status_pembayaran,p.total_harga
    FROM pemesanan as p 
    INNER JOIN asset_kendaraan as ak ON ak.id_asset = p.id_asset WHERE p.id_pemesanan like '$str' ");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
        ?>
        <br><br><br>
        <h1>Resi Pemesanan</h1>

        <table>
            <tr>
                <td>
                    <h2 style="color:orange">Hasil Pencarian Pemesanan</h2>
                    <h2>Nomor Pemesanan :  <?php echo $row->id_pemesanan;?></h2>
                </td>
        
            </tr>
            <tr><td><h4>informasi kendaraan</h4></td></tr>
           
            <tr>
                <td class="add-td">Nama Kendaraan</td>
                <td><input type="text" class="input border-0"  name="nama_kendaraan" value="<?php echo $row->nama_kendaraan;?>" readonly required>
                </td>
            </tr>
            <tr>
                <td class="add-td">Tahun Kendaraan</td>
                <td><input type="text" class="input border-0"  name="deskripsi_kendaraan" value="<?php echo $row->deskripsi_kendaraan;?>" readonly required>
                </td>
            </tr>
        
            <tr>
                <td class="add-td">Jenis Kendaraan</td>
                <td><input type="text" class="input border-0"  name="jenis_kendaraan" value="<?php echo $row->jenis_kendaraan;?>" readonly required>
                </td>
            </tr>
            <tr>
                <td class="add-td">Lokasi Kendaraan</td>
                <td><input type="text" class="input border-0"  name="lokasi_kendaraan" value="<?php echo $row->lokasi_kendaraan;?>" readonly required>
                </td>
            </tr>
            <tr>

            <td><h4>Informasi Pemesan</h4></td>
            <tr>
                <td class="add-td">durasi pemesanan (hari)</td>
                <td><input type="text" class="input border-0" id="jumlah" name="durasi_pemesanan" value="<?php echo $row->durasi_pemesanan;?>" readonly required>
                </td>
            </tr>
            <tr>
                <td class="add-td">nama_pemesanan</td>
                <td><input type="text" class="input border-0" name="nama_pemesanan"  value="<?php echo $row->nama_pemesanan;?>" readonly required>
                </td>
            </tr>
            <tr>
                <td class="add-td">email_pemesanan</td>
                <td><input type="text" class="input border-0" name="email_pemesanan" value="<?php echo $row->email_pemesanan;?>" readonly  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">alamat_pemesanan</td>
                <td><input type="text" class="input border-0" name="alamat_pemesanan" value="<?php echo $row->alamat_pemesanan;?>" readonly  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">no_telfon_pemesanan</td>
                <td><input type="text" class="input border-0" name="no_telfon_pemesanan" value="<?php echo $row->no_telfon_pemesanan;?>" readonly  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">Metode Pembayaran</td>
                <td><input type="text" class="input border-0" name="metode_pembayaran" value="<?php echo $row->metode_pembayaran;?>" readonly  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">lokasi_pengambilan</td>
                <td><input type="text" class="input border-0" name="lokasi_pengambilan" value="<?php echo $row->lokasi_pengambilan;?>" readonly  required>
                </td>
            </tr>

            <tr>
                <td class="add-td">Status Pembayaran</td>
                <td><input type="text" class="input border-0" name="status_pembayaran" value="<?php echo $row->status_pembayaran;?>" readonly  required>
                </td>
            </tr>

            </tr>
            <tr>
                <td></td>
                <td>
                <input type="button" value="Simpan Resi" onclick="reprintPage()" />
                    <button class="action-btn" type="cancel" name="cancel"><a
                            href="index.php">Selesai</a></button>
                    <input type="hidden" name="id_asset" value="<?=$data['id_asset']?>">
                </td>
            </tr>
        </table>

        <script>
            function reprintPage() {
                window.print();
            }
        </script>


        <?php 
	}
		
	else{
	    echo "Name Does not exist";
	}
}
?>
<?php include "footer.php"; ?>

<!-- SELECT ak.nama_kendaraan,ak.merek_kendaraan,ak.lokasi_kendaraan,ak.jenis_kendaraan,ak.deskripsi_kendaraan,p.alamat_pemesanan,p.durasi_pemesanan,p.email_pemesanan,p.id_asset,p.id_pemesanan,p.lokasi_pengambilan,p.metode_pembayaran,p.nama_pemesanan,p.no_telfon_pemesanan,p.status_pembayaran,p.total_harga
FROM pemesanan as p 
INNER JOIN asset_kendaraan as ak ON ak.id_asset = p.id_asset WHERE p.id_pemesanan = "1" -->