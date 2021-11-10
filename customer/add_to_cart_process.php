<?php

session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }

include "../db_conn.php";

// process to add food into the cart
if(isset($_POST['event_id'])){
    $event_id = $_POST['event_id'];
    $customer_name = $_POST['customer_name'];
    $quantity = $_POST['quantity'];

    $sql1 = "SELECT `event_id` FROM `cart_history` WHERE `customer_name` = '$customer_name' AND `event_id` = '$event_id'";
    $result = mysqli_query($conn, $sql1);
    $row = mysqli_num_rows($result);
    if($row > 0){
        $response = "Ticket already available in the cart";
        echo json_encode($response);
    }
    else{
        $sql = "INSERT INTO `cart_history`(`cart_id`, `customer_name`, `event_id`, `quantity`) VALUES (NULL,'$customer_name','$event_id','$quantity')";
        $result = mysqli_query($conn, $sql);
    
        if($result){
            $response = "Ticket Inserted to cart";
            echo json_encode($response);
        }else{
            $response = "Something went wrong";
            echo json_encode($response);
        }
    }

}

?>