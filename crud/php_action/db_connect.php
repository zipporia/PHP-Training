<?php

$dblocalhost = "localhost";
$dbuser = "root";
$dbpassowrd = "";
$dbname = "users";

$conn = new mysqli($dblocalhost, $dbuser, $dbpassowrd, $dbname);

if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}else{
    echo "Successfully Connected";
}