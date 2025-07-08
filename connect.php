<?php

$host="localhost";
$user="root";
$pass= "Sai@12345";
$db="dbmsproject";
$conn=new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) {
    echo"failed to connect DB". $conn->connect_error;
}
?>