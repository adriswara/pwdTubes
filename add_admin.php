<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sewa Kendaraan</title>
</head>

<body>
    <h1> Sewa Kendaraan</h1>
    <h3>Form Add Admin</h3>
    <form method="POST" action="create_admin.php">
        <table>
            <tr>
                <td>Admin Username</td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" required></td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="fullname" required></td>
            </tr>


            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_admin.php">CANCEL</a></p>
</body>

</html>