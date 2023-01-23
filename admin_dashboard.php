<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('index.php');</script>";
}
?>

<?php include "header.php"; ?>

<h1>Admin Dahsboard</h1>

<p><a href="read_asset.php">List Asset Sewa</a></p>
<p><a href="read_admin.php">List Admin</a></p>
<p><a href="read_pemesanan.php">List Pemesanan</a></p>


<?php include "footer.php" ?>