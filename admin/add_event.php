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
    <title>BookMyEvent | Admin</title>
    <style>
        <?php include "dashboard.css" ?>
    </style>
</head>
<body>
    <!-- nav-section -->
    <header id="header-section">
        <div id="logo">
            <h1>BookMyEvent</h1>
        </div>
        
        <ul id="nav">
        <li><a href="dashboard.php"><i class="fas fa-chart-line"></i></i><span>Dashboard</span></a></li>
            <li><a href="add_event.php" class="active"><i class="fas fa-calendar-week"></i></i><span>Add Event</span></a></li>
            <li><a href="admin_orders.php"><i class="fas fa-list-alt"></i>Orders</span></a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
        </ul>
    </header>

    <div class="form-section">
        
        <form action="add_event_process.php" method="post" enctype="multipart/form-data">
            
            <div class="form-input">
                <label for="event_name">Event Name:</label>
                <input type="text" name="event_name" id="event_name" required>
            </div>
            <div class="form-input">
                <label for="price">Ticket Price:</label>
                <input type="number" name="price" id="price" required>
            </div>
            <div class="form-input">
                <label for="date">Date & Time:</label>
                <input type="datetime-local" name="date" id="date" required>
            </div>
            <div class="form-input">
                <label for="Image">Poster:</label>
                <input type="file" name="image" id="image" required>
            </div>
            
            <input type="submit" name="submit" value="Add">
    
        </form>
    </div>





    <!-- Footer Section -->
    <!-- <footer>
        <p>Copyright &copy; 2021</p>
    </footer> -->

    <!-- JavaScript -->
    <!-- <script src="admin_dashboard.js"></script> -->
</body>
</html>