<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Kendaraan</title>
</head>
<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('index.php');</script>";
}
?>


<body>
    <h1>Sewa Kendaraan</h1>
    <h3>Form Edit Admin</h3>
    <form method="POST" action="update_admin.php">
        <?php 
              include "connection.php";
              $querry = "SELECT * FROM admin WHERE id_admin='$_GET[id]'";
              $pet=mysqli_query($db_connection,$querry);
              $data=mysqli_fetch_assoc($pet);
          ?>


        <table>
            <tr>
                <td>Admin Username</td>
                <td><input type="text" name="username" value="<?= $data['username']; ?>" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" value="<?= $data['password']; ?>" required></td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="fullname" value="<?= $data['fullname']; ?>" required></td>
            </tr>


            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="id_admin" value="<?=$data['id_admin']?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_admin.php">CANCEL</a></p>
</body>

</html>