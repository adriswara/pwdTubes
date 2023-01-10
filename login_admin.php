<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sewa Kendaraan</h1>
    <h3>Form Login</h3>
    <form class="form" method="post" action="login_query.php">
        <table class="table-form">
            <tr>
                <td>Username</td>
                <td><input class="input-form" type="text" name="username" placeholder="username" required /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input class="input-form" type="password" name="password" id="pass" placeholder="password"
                        required /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;<input type="checkbox" onclick="show()">Show Password</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;
                    <button type="submit" name="login">Login</button>
                    <button type="reset" name="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
    <p><a href="index.php.php">Cancel</a></p>
    <script>
    function show() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
</body>

</html>