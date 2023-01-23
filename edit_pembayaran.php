<?php include "header.php" ?>
    <h1>Sewa Kendaraan</h1>
    <h3>Form Edit Admin</h3>
    <form method="POST" action="update_pembayaran.php">
        <?php 
              include "connection.php";
              $querry = "SELECT * FROM pemesanan WHERE id_pemesanan='$_GET[id]'";
              $pet=mysqli_query($db_connection,$querry);
              $data=mysqli_fetch_assoc($pet);
          ?>


        <table>
        <tr>
                <td class="add-td">durasi pemesanan (hari)</td>
                <td><input type="text" class="input border-0"  name="durasi_pemesanan" value="<?=$data['email_pemesanan']?>" readonly required>
                 </td>
            </tr>
            <tr>
                 <td class="add-td">nama pemesanan</td>
                 <td><input type="text" class="input border-0"  name="nama_pemesanan" value="<?=$data['nama_pemesanan']?>" readonly required>
                 </td>
            </tr>
            <tr>
                 <td class="add-td">email pemesanan</td>
                 <td><input type="text" class="input border-0"  name="email_pemesanan" value="<?=$data['email_pemesanan']?>" readonly required>
                 </td>
            </tr>
            <tr>
                <td class="add-td">alamat pemesanan</td>
                <td><input type="text" class="input border-0"  name="alamat_pemesanan" value="<?=$data['alamat_pemesanan']?>" readonly required>
                 </td>
            </tr>
            <tr>
                <td class="add-td">no_telfon_pemesanan</td>
                <td><input type="text" class="input border-0"  name="no_telfon_pemesanan" value="<?=$data['no_telfon_pemesanan']?>" readonly required>
                 </td>
            </tr>
            <tr>
                <td class="add-td">metode_pembayaran</td>
                <td><input type="text" class="input border-0"  name="metode_pembayaran" value="<?=$data['metode_pembayaran']?>" readonly required>
                 </td>
            </tr>
            <tr>
                <td class="add-td">lokasi_pengambilan</td>
                <td><input type="text" class="input border-0"  name="lokasi_pengambilan" value="<?=$data['lokasi_pengambilan']?>" readonly required>
                 </td>
            </tr>
            <tr>
                <td class="add-td">total_harga</td>
                <td><input type="text" class="input border-0"  name="total_harga" value="<?=$data['total_harga']?>" readonly required>
                 </td>
            </tr>
            <tr>
            <td class="add-td">Status Pembayaran</td>
                <td>
                    <input type="radio" name="status_pembayaran" value="belum lunas"
                        <?=($data['status_pembayaran']=='belum lunas')?'checked':'';?> required> Belum Lunas |
                    <input type="radio" name="status_pembayaran" value="lunas"
                        <?=($data['status_pembayaran']=='lunas')?'checked':'';?> required> Lunas
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="id_pemesanan" value="<?=$data['id_pemesanan']?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_pembayaran.php">CANCEL</a></p>
<?php include "footer.php" ?>