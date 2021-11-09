<?php

// Connect Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "bme";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
  die("Connection Failed: ". mysqli_connect_error());
}else{
    // echo "success";
}

?>