<?php

    session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a4d05c5536.js" crossorigin="anonymous"></script>
    <title>BookMyEvent</title>
    <style>
        <?php include "../public/style.css" ?>
        <?php include "orders.css" ?>
    </style>
</head>
<body>
    <!-- nav-section -->
    <header id="header-section">
        <div id="logo">
            <h1>Book My Event</h1>
        </div>
        
        <ul id="nav">
            <li><a href="index.php"><i class="fas fa-home"></i><span>Home</span></a></li>
            <li><a href="cart.php"><i class="fas fa-cart-arrow-down"></i><span>My Cart</span></a></li>
            <li><a href="tickets.php" class="active"><i class="fas fa-clipboard-list"></i><span>My Tickets</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
    </header>

    <h1 style="text-align:center"><span id="session-variable" class="session-hidden"><?php echo $_SESSION['username']?><span></h1>
    
    <!-- orders section -->
    <div id="orders">
        
    </div>


    <!-- Footer Section -->
    <!-- <footer>
        <p>Copyright &copy; 2021</p>
    </footer> -->

    <script src="tickets.js"></script>
</body>
</html>