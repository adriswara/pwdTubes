<?php
if (isset($_GET['id'])) {
	include "connection.php";
	$password = password_hash($_GET ['type'], PASSWORD_DEFAULT);
	$query="UPDATE admin SET password='$password' where id_admin='$_GET[id]'";
	$update=mysqli_query($db_connection,$query);
	if($update){
		echo"<script>alert('Reset password successed !')</script>";
	}else{
		echo"<script>alert('Reset password failed !')</script>";
	}
}
?>
<script>
window.location.replace("read_admin.php");
</script>