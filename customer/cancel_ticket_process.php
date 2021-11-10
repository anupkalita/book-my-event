<?php

session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }

include "../db_conn.php";

if(isset($_POST['transaction_id'])){
    $transaction_id = $_POST['transaction_id'];
    $customer_name = $_POST['customer_name'];

    $sql = "DELETE FROM `transaction_history` WHERE `customer_name` = '$customer_name' && `transaction_id` = '$transaction_id'";
    mysqli_query($conn, $sql);

    $response = "Ticket #$transaction_id Cancelled Successfully";
    echo json_encode($response);
}

?>