<?php
    session_start();

if(!$_SESSION['username']){
    header("location:admin_login.php");
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->
    <script src="https://kit.fontawesome.com/a4d05c5536.js" crossorigin="anonymous"></script>
    <title>Book My Event | Admin</title>
    <style>
        <?php include "dashboard.css" ?>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <!-- nav-section -->
    <header id="header-section">
        <div id="logo">
            <h1>BookMyEvent</h1>
        </div>
        
        <ul id="nav">
            <li><a href="dashboard.php" class="active"><i class="fas fa-chart-line"></i></i><span>Dashboard</span></a></li>
            <li><a href="add_event.php"><i class="fas fa-calendar-week"></i></i><span>Add Event</span></a></li>
            <li><a href="admin_orders.php"><i class="fas fa-list-alt"></i>Orders</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
    </header>

    <h1 class="admin-greeting">ADMIN DASHBOARD</h1>

    <div id="display-category">
            <!-- <div class="item">
                <img src="" alt="">
                <div class="item-desc">
                    <h3></h3>
                    <p><i class="fas fa-rupee-sign"></i> </p>
                </div>
                <div>
                    <button class="item-btn"><i class="fas fa-cart-arrow-down"></i> </button>
                    <span id="food-id"></span>
                </div>
            </div>   -->
        </div>



    <!-- Footer Section -->
    <!-- <footer>
        <p>Copyright &copy; 2021</p>
    </footer> -->

    <!-- JavaScript -->
    <script src="dashboard.js"></script>
</body>
</html>