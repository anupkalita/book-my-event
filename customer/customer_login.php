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
        <?php include "../public/login.css" ?>
    </style>
</head>
<body>
    <div id="login-page">

        <div id="form-section">
            <h1>LoginIn to BookMyEvent</h1>

            <!-- form -->
            <form action="login_process.php" id="form" method="POST">
            <!-- <form action="#" id="form"> -->
                <div>
                    <label for="phone-email">Phone/Email</label><br>
                    <input type="text" name="phone-email" id="phone-email" required>
                </div>                
                <div>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" required>
                </div>
  
                <input type="submit" id="submit" value="Log In" name="submit">   
                
                <!-- or-section -->
                <div id="hr-rule">
                    <hr class="one">
                    <span class="mid-text">or</span>
                    <hr class="two">
                </div>
            </form>

            <div id="sign-up">
                <p>Don't have an account?</p>
                <a href="customer_signup.php">SignUp Here</a>
                <a href="../admin/admin_login.php">Admin Login Here</a>
            </div>
            
        </div>

        <div id="carousel-section">
            <img src="../public/admin-img/event-icon-vector-5.jpg" alt="event-img">
            <div class="carousel-text">
                <h1>BookMyEvent</h1>
                <p>MyEvent, MyTime, MySeat</p>
            </div>
        </div>

    </div>

</body>
</html>