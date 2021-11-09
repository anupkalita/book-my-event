<?php

session_start();
if(!$_SESSION['username']){
    header("location:admin_login.php");
};

include "../db_conn.php";

// Process to add event poster and details
if(isset($_POST["submit"])){

    $event_name = $_POST['event_name'];
    $price = $_POST['price'];
    $date = $_POST['date'];
    $fileName = $_FILES["image"]["name"];
    echo "$date";

    $random_number = rand(111,999);

    $destination = "./event/".$random_number.$fileName;
    
    move_uploaded_file($_FILES["image"]["tmp_name"], $destination);

    $sql = "INSERT INTO `event_details`(`event_id`, `event_name`, `price`, `date_time`, `poster`) VALUES (NULL,'$event_name','$price','$date','$destination')";
    $result = mysqli_query($conn, $sql);

    header("location:dashboard.php");
    
    mysqli_close($conn);
}

?>