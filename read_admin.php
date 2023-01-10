<?php include "session.php"; ?>

<?php include "header.php"; ?>

<h1>List Admin</h1>
<p><a href="add_admin.php"> Add New Admin</a></p>
<table border="1">
    <tr>
        <th>Id</th>
        <th>username</th>
        <th>Password</th>
        <th>fullname</th>
        <th colspan="3">Action</th>
    </tr>

    <?php 
        include "connection.php";
        $query = "SELECT * FROM admin";
        $pets = mysqli_query($db_connection,$query);
        
        $i = 1;
        foreach ($pets as $data) :
        ?>

    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['fullname']; ?></td>
        <td><a href="edit_admin.php?id=<?=$data['id_admin']?>">Edit Admin</a></td>
        <td><a href="delete_admin.php?id=<?=$data['id_admin']?>"
                onclick="return confirm('Are You sure?')">DeleteAdmin</a></td>
        <td><button class="action-btn">
                <p><a href="reset_password.php?id=<?=$data['id_admin'];?>&type=<?=$data['username'];?>"
                        onclick="return confirm('are you sure reset the password?')">Reset Password</a></p>
            </button></td>
    </tr>
    <?php endforeach ?>
</table>
<p><a href="admin_dashboard.php">Back to Home</a></p>

<?php include "footer.php"; ?>