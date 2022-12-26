<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa Kendaraan</title>
</head>

<body>
    <h1>Sewa Kendaraan </h1>
    <h3>List Admin</h3>
    <p><a href="add_admin.php"> Add New Admin</a></p>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>username</th>
            <th>Password</th>
            <th>fullname</th>
            <th colspan="2">Action</th>
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
            <td><a href="delete_admin.php?id=<?=$data['id_admin']?>" onclick="return confirm('Are You sure?')">Delete
                    Admin</a></td>
        </tr>
        <?php endforeach ?>
    </table>
    <p><a href="index.php">Back to Home</a></p>
</body>

</html>