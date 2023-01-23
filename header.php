<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Rental Website</title>
    <!--link to css-->
    <link rel="stylesheet" href="style.css" />
    <!--box icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="img/jeep.png" alt /></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="list_asset.php">Rides</a></li>
            <li><a href="search_order.php">Seach Order</a></li>
            <!-- <li><a href="#reviews">About</a></li>
            <li><a href="#reviews">Home</a></li> -->
        </ul>
        <div class="header-btn">
            <!-- <a href="#" class="sign-up">Sign Up</a> -->
            <?php 
        if(isset($_SESSION)){
        include "connection.php";
        $query = "SELECT * FROM admin WHERE fullname='$_SESSION[fullname]'";
        $user=mysqli_query($db_connection,$query);
        $data=mysqli_fetch_assoc($user);
        }
            ?>
            <?php 
        if(isset($_SESSION)){
         echo '<a href="logout.php">Logout</a>';
         echo '<h6>User : ',$_SESSION["fullname"],'</h6>';
        }

        else{
            echo '<a href="login_admin.php">Login</a>';
        }

        ?>



        </div>
    </header>

    <!--Inside-->
    <section class="home" id="home">
        <div class="text">