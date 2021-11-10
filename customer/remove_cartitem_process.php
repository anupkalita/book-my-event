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

    $sql = "DELETE FROM `cart_history` WHERE `customer_name` = '$customer_name' AND `event_id` = '$event_id'";
    mysqli_query($conn, $sql);

    $response = $event_id . $customer_name;
    echo json_encode($response);
}

?>