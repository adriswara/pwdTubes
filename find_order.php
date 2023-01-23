<?php include "header2.php"; ?>

<?php
        include "connection.php";
        //make query dari id
        $query="SELECT ak.nama_kendaraan,ak.merek_kendaraan,ak.lokasi_kendaraan,ak.jenis_kendaraan,ak.deskripsi_kendaraan,p.alamat_pemesanan,p.durasi_pemesanan,p.email_pemesanan,p.id_asset,p.id_pemesanan,p.lokasi_pengambilan,p.metode_pembayaran,p.nama_pemesanan,p.no_telfon_pemesanan,p.status_pembayaran,p.total_harga
        FROM pemesanan as p 
        INNER JOIN asset_kendaraan as ak ON ak.id_asset = p.id_asset WHERE p.no_telfon_pemesanan = '$_GET[id]'";
        //menjalankan query
        $user= mysqli_query($db_connection,$query);
        //extrak hasil query
        $data=mysqli_fetch_assoc($user);
    ?>
<br><br><br>
<h1>Resi Pemesanan</h1>

        <table>
            <tr>
                <td>
                    <h2 style="color:red">PERINGATAN : CATAT NOMOR PEMESANAN ANDA</h2>
                    <h2>Nomor Pemesanan :  <?= $data["id_pemesanan"]; ?></h2>
                </td>
        
            </tr>
            <tr><td><h4>informasi kendaraan</h4></td></tr>
            <tr>
                <td class="add-td">ID Kendaraan</td>
                <td><input type="text" class="input border-0"  name="id_asset" value="<?=$data['id_asset']?>" readonly required>
                </td>
            </tr>
            
            <tr>
                <td class="add-td">Nama Kendaraan</td>
                <td><input type="text" class="input border-0"  name="nama_kendaraan" value="<?=$data['nama_kendaraan']?>" readonly required>
                </td>
            </tr>
            <tr>
                <td class="add-td">Tahun Kendaraan</td>
                <td><input type="text" class="input border-0"  name="deskripsi_kendaraan" value="<?=$data['deskripsi_kendaraan']?>" readonly required>
                </td>
            </tr>
        
            <tr>
                <td class="add-td">Jenis Kendaraan</td>
                <td><input type="text" class="input border-0"  name="jenis_kendaraan" value="<?= $data['jenis_kendaraan']; ?>" readonly required>
                </td>
            </tr>
            <tr>
                <td class="add-td">Lokasi Kendaraan</td>
                <td><input type="text" class="input border-0"  name="lokasi_kendaraan" value="<?= $data['lokasi_kendaraan']; ?>" readonly required>
                </td>
            </tr>
            <tr>

            <td><h4>Informasi Pemesan</h4></td>
            <tr>
                <td class="add-td">durasi pemesanan (hari)</td>
                <td><input type="text" class="input border-0" id="jumlah" name="durasi_pemesanan" value="<?= $data['durasi_pemesanan']; ?>" readonly required>
                </td>
            </tr>
            <tr>
                <td class="add-td">nama_pemesanan</td>
                <td><input type="text" class="input border-0" name="nama_pemesanan"  value="<?= $data['nama_pemesanan']; ?>" readonly required>
                </td>
            </tr>
            <tr>
                <td class="add-td">email_pemesanan</td>
                <td><input type="text" class="input border-0" name="email_pemesanan" value="<?= $data['email_pemesanan']; ?>" readonly  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">alamat_pemesanan</td>
                <td><input type="text" class="input border-0" name="alamat_pemesanan" value="<?= $data['alamat_pemesanan']; ?>" readonly  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">no_telfon_pemesanan</td>
                <td><input type="text" class="input border-0" name="no_telfon_pemesanan" value="<?= $data['no_telfon_pemesanan']; ?>" readonly  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">Metode Pembayaran</td>
                <td><input type="text" class="input border-0" name="metode_pembayaran" value="<?= $data['metode_pembayaran']; ?>" readonly  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">lokasi_pengambilan</td>
                <td><input type="text" class="input border-0" name="lokasi_pengambilan" value="<?= $data['lokasi_pengambilan']; ?>" readonly  required>
                </td>
            </tr>

            <tr>
                <td class="add-td">Status Pembayaran</td>
                <td><input type="text" class="input border-0" name="status_pembayaran" value="<?= $data['status_pembayaran']; ?>" readonly  required>
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
window.onload = function printPage() {
  window.print();
}
function reprintPage() {
  window.print();
}
</script>
<?php include "footer.php"; ?>