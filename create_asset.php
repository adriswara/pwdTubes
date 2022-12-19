<?php 

if (isset($_POST['save'])) {
    include "connection.php";



$query = "INSERT INTO asset_kendaraan (harga, nama_kendaraan, merek_kendaraan, jenis_kendaraan, deskripsi_kendaraan) VALUES ('$_POST[harga]','$_POST[nama_kendaraan]','$_POST[merek_kendaraan]','$_POST[jenis_kendaraan]','$_POST[deskripsi_kendaraan]')";
$create = mysqli_query($db_connection ,$query);

if ($create) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('asset added succesfuly !'); </script>";
}
else{
    // echo "<p>Pet add failed !</p>";
echo "<script> alert('asset add failed!'); </script>";
}
}

?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_asset.php");
</script>