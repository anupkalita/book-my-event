<?php

session_start();
    if(!$_SESSION['username']){
        echo"unauthorised";
        exit;
    }

// database connection
include "../db_conn.php";

// Retrive events from database
$sql = "SELECT * FROM `event_details`";
$result = mysqli_query($conn, $sql);

// array to store each row
$arr = array();
while($row = mysqli_fetch_assoc($result)){
    array_push($arr, $row);
}

// convert array into json format
echo json_encode($arr);

?>