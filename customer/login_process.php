<?php
session_start();
include "../db_conn.php";

if(isset($_POST['phone-email'])){
    $phone_email = $_POST['phone-email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM `customer_details` WHERE (`phone` = '$phone_email' || `email` = '$phone_email') && `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
    echo $row;
        if($row == 1){
            $row = mysqli_fetch_assoc($result);
            echo "Success Login";
            $_SESSION['username'] = $row["username"];
            header('Location:index.php'); 
        }else{
            echo "<script>alert('invalid credentials');
                location.href = 'customer_login.php';
            </script>";
        }

}

?>