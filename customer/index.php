<?php
    session_start();

if(!$_SESSION['username']){
    header("location:customer_login.php");
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
    <title>Book My Event</title>
    <style>
        <?php include "../public/style.css" ?>
    </style>
</head>
<body>
    <!-- nav-section -->
    <header id="header-section">
        <div id="logo">
            <h1>BookMyEvent</h1>
        </div>
        
        <ul id="nav">
            <li><a href="index.php" class="active"><i class="fas fa-home"></i><span>Home</span></a></li>
            <li><a href="cart.php"><i class="fas fa-cart-arrow-down"></i><span>My Cart</span></a></li>
            <li><a href="tickets.php"><i class="fas fa-clipboard-list"></i><span>My Tickets</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
    </header>

    <!-- showcase-section -->
    <section id="showcase-section">
        <div id="showcase-text">
            <h3>Hello, <span id="session-variable"><?php echo $_SESSION['username']?><span></h3>
            <h2>Are You Ready?</h2>
            <h3>For The Biggest Events</h3>
        </div>
    </section>
       
    <section>
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
    </section>

    <!-- Footer Section -->
    <footer>
        <p>Copyright &copy; 2021</p>
    </footer>

    <!-- JavaScript -->
    <script src="index.js"></script>
</body>
</html>