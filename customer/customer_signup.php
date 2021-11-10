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
            <h1>Signup to BookMyEvent</h1>

            <!-- form -->
            <!-- <form action="signup_process.php" method="POST"> -->
            <form action="#" id="form">
                <div>
                    <label for="username">Username</label><br>
                    <input type="text" name="username" id="username" required>
                </div>                
                <div>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" required>
                </div>
                <div>
                    <label for="phone">Phone Number</label><br>
                    <input type="number" name="phone" id="number" required>
                </div>        
                <div>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" required>
                </div>  
                <input type="submit" id="submit" value="Sign Up" name="submit">   
                
                <!-- or-section -->
                <div id="hr-rule">
                    <hr class="one">
                    <span class="mid-text">or</span>
                    <hr class="two">
                </div>
            </form>

            <div id="sign-up">
                <p>Already have an account?</p>
                <a href="customer_login.php">Login Here</a>
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
    
    <script src="signup.js"></script>
</body>
</html>