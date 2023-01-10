<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Situs Sewa</title>
</head>

<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('index.php');</script>";
}
?>


<body>
    <h1>Situs Penyewaan</h1>
    <h3>sewa Kendaraan</h3>
    <p><a href="read_asset.php">List Asset Sewa</a></p>
    <p><a href="read_admin.php">List Admin</a></p>
    <p><a href="logout.php">Logout</a></p>



</body>

</html>