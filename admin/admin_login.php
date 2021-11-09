<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="signup_style.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/a4d05c5536.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    
    <title>Book My Event</title>
    <style>
        <?php include "login.css" ?>
    </style>
</head>
<body>
    <div id="login-page">

        <div id="form-section">
            <h1>Admin Login</h1>
            <!-- <p>Log in to your account and manage your digital world</p> -->

            <!-- form -->
            <form action="admin_login_process.php" method="POST" id="form">
                <div>
                    <label for="username">Username</label><br>
                    <input type="text" name="username" id="username" required>
                </div>                
                <div>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" required>
                </div> 
                <input type="submit" value="Log In" name="submit">   
                
            </form>
        </div>

        <div id="carousel-section">
            <img src="./admin-img/event-icon-vector-5.jpg" alt="event-img">
            <div class="carousel-text">
                <h1>BookMyEvent</h1>
                <p>MyEvent, MyTime, MySeat</p>
            </div>
        </div>

    </div>
</body>
</html>