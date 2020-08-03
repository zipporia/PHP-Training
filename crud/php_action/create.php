<?php

if($_POST){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO members (fname, lname, contact, age, active) VALUES ('$fname', '$lname', '$age', '$contact', 1)"

    if($conn->query($sql) === TRUE){
        echo "<p>New Record Successfully Created</p>";
    }
}

