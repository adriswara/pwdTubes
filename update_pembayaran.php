<?php 

if (isset($_POST['save'])) {
    include "connection.php";



$query = "UPDATE pemesanan SET 
          status_pembayaran = '$_POST[status_pembayaran]'
          WHERE id_pemesanan = '$_POST[id_pemesanan]';
          ";


$update = mysqli_query($db_connection ,$query);

    if ($update) {
    // echo "<p>Pet update succesfully !</p>";
    echo "<script> alert('pembayaran update succesfuly !'); </script>";
    }
    else{
    // echo "<p>Anggota update failed !</p>";
    echo "<script> alert('pembayaran update failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_pemesanan.php");
</script>