<?php

session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }

include "../db_conn.php";

if(isset($_SESSION['username'])){
    $customer_name = $_SESSION['username'];

    $sql = "SELECT event_details.event_id, event_details.event_name, event_details.price, event_details.poster, cart_history.quantity FROM cart_history INNER JOIN event_details ON cart_history.event_id = event_details.event_id WHERE cart_history.customer_name = '$customer_name'";

    $result = mysqli_query($conn, $sql);
    $arr = array();
    while($row = mysqli_fetch_assoc($result)){
        array_push($arr, $row);
    }

    echo json_encode($arr);
}

?>