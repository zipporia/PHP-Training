<?php

require_once 'db_connect.php';

if($_POST){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $id = $_POST['id'];

    $sql = "UPDATE members  SET fname = '$fname', lname = '$lname', contact = '$contact', age = '$age' WHERE id = {$id}";

    if($conn->query($sql) === TRUE){
        
        header("Location: ../index.php?SuccessfulyUpdated");
        
    }else{
        echo "Error while updating the data";
    }

    $conn->close();
}



