
<?php

session_start();

// for user logout
if(isset($_SESSION['username'])){
    session_destroy();

    header('location:customer_login.php');

}



?>