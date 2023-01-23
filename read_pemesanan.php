<?php include "session.php"; ?>

<?php include "header.php"; ?>

<h1>List Tansaksi</h1>

<table border="1">
    <tr>
        <th>Id Tansaksi</th>
        <th>Id Asset</th>
        <th>Durasi</th>
        <th>Nama Pemesanan</th>
        <th>Email Pemesanan</th>
        <th>Alamat Pemesanan</th>
        <th>No Telfon Pemesanan</th>
        <th>Metode Pembayaran</th>
        <th>Lokasi Pengambilan</th>
        <th>Total Harga</th>
        <th>Status Pembayaran</th>
        <th colspan="1">Action</th>
    </tr>

    <?php 
        include "connection.php";
        $query = "SELECT * FROM pemesanan";
        $pets = mysqli_query($db_connection,$query);
        
        $i = 1;
        foreach ($pets as $data) :
        ?>

    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data['id_asset']; ?></td>
        <td><?php echo $data['durasi_pemesanan']; ?></td>
        <td><?php echo $data['nama_pemesanan']; ?></td>
        <td><?php echo $data['email_pemesanan']; ?></td>
        <td><?php echo $data['alamat_pemesanan']; ?></td>
        <td><?php echo $data['no_telfon_pemesanan']; ?></td>
        <td><?php echo $data['metode_pembayaran']; ?></td>
        <td><?php echo $data['lokasi_pengambilan']; ?></td>
        <td><?php echo $data['total_harga']; ?></td>
        <td><?php echo $data['status_pembayaran']; ?></td>
        <td><a href="edit_pembayaran.php?id=<?=$data['id_pemesanan']?>">Status Pembayaran</a></td>
            </button></td>
    </tr>
    <?php endforeach ?>
</table>
<p><a href="admin_dashboard.php">Back to Home</a></p>

<?php include "footer.php"; ?>