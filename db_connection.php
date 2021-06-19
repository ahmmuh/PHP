<?php
$servername = "localhost";
$username = "ahmmuh";
$password = "test1234";
$db_name = "users";
$conn = mysqli_connect($servername,$username,$password,$db_name);

if(!$conn){
    echo "Connection error " . mysqli_connect_error;
}

?>