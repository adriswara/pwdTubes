<?php 

if (isset($_POST)) {
    include "connection.php";
}


$query = "INSERT INTO pemesanan (id_asset, durasi_pemesanan, nama_pemesanan, email_pemesanan, alamat_pemesanan, no_telfon_pemesanan, metode_pembayaran, lokasi_pengambilan, total_harga) VALUES ('$_POST[id_asset]','$_POST[durasi_pemesanan]','$_POST[nama_pemesanan]','$_POST[email_pemesanan]','$_POST[alamat_pemesanan]','$_POST[no_telfon_pemesanan]','$_POST[metode_pembayaran]','$_POST[lokasi_pengambilan]','$_POST[total_harga]')";
$create = mysqli_query($db_connection ,$query);



if ($create) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('wisata added succesfuly !'); </script>";
  
}
else{
    // echo "<p>Pet add failed !</p>";
echo "<script> alert('wisata add failed!'); </script>";
}


?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
    var php_var = "<?php echo $_POST["no_telfon_pemesanan"]; ?>";
    var link = "find_order.php?id=";
    var result = link.concat(php_var);
window.location.replace(result);
</script>