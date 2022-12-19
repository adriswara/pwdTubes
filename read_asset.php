<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Kendaraan</title>
</head>

<body>
    <h1>Sewa Kendaraan </h1>
    <h3>List Kendaraan</h3>
    <p><a href="add_anggota_220088.php"> Add New Kendaraan</a></p>
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
            <td><a href="edit_anggota_220088.php?id=<?=$data['id_anggota_220088']?>">Edit Kendaraan</a></td>
            <td><a href="delete_anggota_220088.php?id=<?=$data['id_anggota_220088']?>"
                    onclick="return confirm('Are You sure?')">Delete Kendaraan</a></td>
        </tr>
        <?php endforeach ?>
    </table>
    <p><a href="index.php">Back to Home</a></p>
</body>

</html>