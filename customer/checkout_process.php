<?php

session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }

include "../db_conn.php";

if(isset($_POST['totalEvent'])){
    $total_price = $_POST['totalPrice'];
    $customer_name = $_POST['customer_name'];
    $total_event = $_POST['totalEvent'];

    // To store ordered ticket details in order_history
    $sql = "INSERT INTO `transaction_history`(`transaction_id`, `customer_name`, `total_event`, `total_price`, `date_booked`) VALUES (NULL,'$customer_name','$total_event','$total_price',CURRENT_TIME())";

    mysqli_query($conn, $sql);



    // To remove stored ordered ticket details from cart_history
    $sql = "DELETE FROM `cart_history` WHERE `customer_name` = '$customer_name'";

    mysqli_query($conn, $sql);

}

?>