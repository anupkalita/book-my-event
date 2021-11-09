<?php
session_start();
include "../db_conn.php";

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo $password;

    $sql = "SELECT * FROM `admin_details` WHERE `username` = '$username' && `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($result);
        if($row == 1){
            echo "Successful Login";
            $_SESSION['username'] = $username;
            header('Location:dashboard.php'); 
        }else{
            echo "<script>alert('invalid credentials');
                location.href = 'admin_login.php';
            </script>";
        }

}

?>