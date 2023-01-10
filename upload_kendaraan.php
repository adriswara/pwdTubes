<?php  

if (isset($_POST['upload'])) {
    include "connection.php";

    $folder = 'img/';
    if (move_uploaded_file($_FILES['new_photo']['tmp_name'], $folder . $_FILES['new_photo']['name'])) {
        
        $photo = $_FILES['new_photo']['name'];
        $query="UPDATE asset_kendaraan SET display_kendaraan='$photo' WHERE id_asset='$_POST[id_asset]'";

        $upload = mysqli_query($db_connection,$query);

        if ($upload) {
            if ($_POST['display_kendaraan'] !== 'default.png') unlink($folder . $_POST['display_kendaraan']);
                echo "<script> alert('Change photo succesed !'); window.location.replace('read_asset.php');</script>";
        }    
            else{
                echo "<script>alert('Change photo failed ! ');window.location.replace('display_kendaraan.php?id=$_POST[id_asset]');</script>";
            }
            
        }
        else echo " <script>alert('upload photo failed !');window.location.replace('display_kendaraan.php?id=$_POST[id_asset]');</script>";
        
}
?>