<?php
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "skj";

$result    = mysqli_connect($host, $user, $password, $database);

if ($result){
    //echo"connected";
}else{
    echo"error".mysqli_connect_error();
}
?>