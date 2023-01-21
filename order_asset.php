<?php include "header.php"; ?>

<?php
        include "connection.php";
        //make query dari id
        $query="SELECT * FROM asset_kendaraan WHERE id_asset='$_GET[id]'";
        //menjalankan query
        $user= mysqli_query($db_connection,$query);
        //extrak hasil query
        $data=mysqli_fetch_assoc($user);
    ?>

<div class="add">
    <h3>Edit User Form</h3>
    <form class="add-form" method="post" action="update_user_220088.php">
        <table>
            <tr>
                <td class="add-td">UserName</td>
                <td><input type="text" name="username_220088" value="<?=$data['id_asset']?>" required>
                </td>
            </tr>
            
            <tr>
                <td class="add-td">FullName</td>
                <td><input type="text" name="fullname_220088" value="<?=$data['nama_kendaraan']?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button class="action-btn" type="submit" name="save">Save</button>
                    <button class="action-btn" type="reset" name="reset">Reset</button>
                    <button class="action-btn" type="cancel" name="cancel"><a
                            href="read_user_220088.php">Cancel</a></button>
                    <input type="hidden" name="id_asset" value="<?=$data['id_asset']?>">
                </td>
            </tr>
        </table>
    </form>

<?php include "footer.php"; ?>