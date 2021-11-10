<?php

session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }

include "../db_conn.php";

if(isset($_POST['event_id'])){
    $event_id = $_POST['event_id'];
    $customer_name = $_POST['customer_name'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE `cart_history` SET `quantity`= '$quantity' WHERE `customer_name` = '$customer_name' && `event_id` = '$event_id'";
    mysqli_query($conn, $sql);

    $response = $event_id . $customer_name . $quantity;
    echo json_encode($response);
}


?>