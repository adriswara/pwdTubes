<?php
session_start(); //start session
if(isset($_POST['login'])) { //check post variable
	include "connection.php"; //call connection
	
	//make query based on username
	$query="SELECT * FROM admin WHERE username='$_POST[username]'";
	
	//run query 
	$login=mysqli_query($db_connection,$query);
	
	if(mysqli_num_rows($login) > 0) {
		$user=mysqli_fetch_assoc($login);
		if(password_verify($_POST['password'], $user['password'])) {
			
		$_SESSION['login']=TRUE;
		$_SESSION['id_admin']=$user['id_admin'];
		$_SESSION['username']=$user['username'];
		$_SESSION['password']=$user['password'];
		$_SESSION['fullname']=$user['fullname'];
		
		echo "<script>alert('login success !');window.location.replace('admin_dashboard.php');</script>";
		} else {
			echo "<script>alert('login failed, wrong password !');window.location.replace('index.php');</script>";
		}
		}else {
			echo "<script>alert('login failed, user not found !');window.location.replace('index.php');</script>";
	}
}
?>