<?php include "header.php"; ?>

<style>
body  {
  background-image: url("img/Car\ Website\ –\ 1@2x.png");
  background-repeat: no-repeat;
  background-position: center right;
  background-size: cover;
}
</style>

<h3>Form Login</h3>
<form class="form" method="post" action="login_query.php">
    <table class="table-form">
        <tr>
            <td>Username</td>
            <td><input class="input-form" type="text" name="username" placeholder="username" required /></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input class="input-form" type="password" name="password" id="pass" placeholder="password" required />
            </td>
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
<p><a href="index.php">Cancel</a></p>

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

<?php include "footer.php"; ?>