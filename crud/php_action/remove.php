<?php

require_once 'db_connect.php';

if($_POST){
    $id = $_POST['id'];

    $sql = "UPDATE members SET active = 2 WHERE id=$id";

    if($conn->query($sql) === TRUE){
        header("Location: ../index.php?SuccessfullyDeleted");
    }else{
        echo "Error while removing the data";
    }
}