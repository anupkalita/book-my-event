<?php
include "../db_conn.php";

// Process to add new user into the database
if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM `customer_details` WHERE `email` = '$email' || `phone` = '$phone'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_num_rows($result)){
        // to check if the user already exist or not
        if($row > 0){
            echo json_encode("Email or Phone Number already Exist!");
            exit;
        }
    }
        // if user is not exist in the database
        $sql =  "INSERT INTO `customer_details`(`customer_id`, `username`, `password`, `phone`, `email`) VALUES (NULL,'$username','$password','$phone','$email')";
        $result = mysqli_query($conn, $sql);

        $response = "Data Inserted";
    echo json_encode($response);
}

?>