<?php include "header.php"; ?>

<?php
        include "connection.php";
        //make query dari id
        $query="SELECT * FROM asset_kendaraan WHERE id_asset='$_GET[id]'";
        //menjalankan query
        $user= mysqli_query($db_connection,$query);
        //extrak hasil query
        $data=mysqli_fetch_assoc($user);
    ?>

<div class="add">
    <h3>Edit User Form</h3>
    <form class="add-form" method="post" action="transaksi_asset.php">
        <h1>Detail Unit Pemesanan</h1>
        <table>
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
                <td class="add-td">Harga</td>
                <td><input type="text" class="input border-0"  id="harga" name="harga" value="<?=$data['harga']?>" readonly required>
                </td>
            </tr>
            <tr>
                <td class="add-td">Total Harga Penyewaan</td>
                <td><input type="text" class="input border-0" id="hargaTotal"  name="total_harga"  value="<?=$data['harga']?>"  readonly required>
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

            <td><h4>Input Informasi Pemesanan</h4></td>
            <tr>
                <td class="add-td">durasi pemesanan (hari)</td>
                <td><input type="text" id="jumlah" name="durasi_pemesanan" onkeyup="hitungPesan()"  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">nama_pemesanan</td>
                <td><input type="text" name="nama_pemesanan"  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">email_pemesanan</td>
                <td><input type="text" name="email_pemesanan"  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">alamat_pemesanan</td>
                <td><input type="text" name="alamat_pemesanan"  required>
                </td>
            </tr>
            <tr>
                <td class="add-td">no_telfon_pemesanan</td>
                <td><input type="text" name="no_telfon_pemesanan"  required>
                </td>
            </tr>
            <tr>
            <td> Metode Pembayaan</td>
            <td>
                <select name="metode_pembayaran" id="">
                    <option value="cash">Cash</option>
                    <option value="transfer">Transfer</option>
                </select>
            </td>
        </tr>
            <tr>
                <td class="add-td">lokasi_pengambilan</td>
                <td><input type="text" name="lokasi_pengambilan"  required>
                </td>
            </tr>

            </tr>
            <tr>
                <td></td>
                <td>
                    <button class="action-btn" type="submit" name="save">Save</button>
                    <button class="action-btn" type="reset" name="reset">Reset</button>
                    <button class="action-btn" type="cancel" name="cancel"><a
                            href="lsit_asset.php">Cancel</a></button>
                    <input type="hidden" name="id_asset" value="<?=$data['id_asset']?>">
                </td>
            </tr>
        </table>
    </form>

    <script>



function hitungPesan() {
    var inputHarga = parseInt(document.getElementById("harga").value);
    var jmlTiket = document.getElementById("jumlah").value;
    var result;
    var tiket = parseInt(jmlTiket);

    result = inputHarga * tiket;

    document.getElementById("hargaTotal").value = result;
    console.log(result);
}
</script>

<?php include "footer.php"; ?>

<!-- SELECT ak.nama_kendaraan,ak.merek_kendaraan,ak.lokasi_kendaraan,ak.jenis_kendaraan,ak.deskripsi_kendaraan,p.alamat_pemesanan,p.durasi_pemesanan,p.email_pemesanan,p.id_asset,p.id_pemesanan,p.lokasi_pengambilan,p.metode_pembayaran,p.nama_pemesanan,p.no_telfon_pemesanan,p.status_pembayaran,p.total_harga
FROM pemesanan as p 
INNER JOIN asset_kendaraan as ak ON ak.id_asset = p.id_asset WHERE p.id_pemesanan = "1" -->