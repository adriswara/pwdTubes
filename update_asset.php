<?php 

if (isset($_POST['save'])) {
    include "connection.php";



$query = "UPDATE asset_kendaraan SET 
          harga = '$_POST[harga]', 
          nama_kendaraan = '$_POST[nama_kendaraan]', 
          merek_kendaraan = '$_POST[merek_kendaraan]', 
          jenis_kendaraan = '$_POST[jenis_kendaraan]', 
          deskripsi_kendaraan = '$_POST[deskripsi_kendaraan]'
          WHERE id_asset = '$_POST[id_asset]';
          ";


$update = mysqli_query($db_connection ,$query);

    if ($update) {
    // echo "<p>Pet update succesfully !</p>";
    echo "<script> alert('asset update succesfuly !'); </script>";
    }
    else{
    // echo "<p>Anggota update failed !</p>";
    echo "<script> alert('asset update failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_asset.php");
</script>