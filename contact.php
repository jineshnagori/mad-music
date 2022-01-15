<?php

    session_start();

    include "config.php";

    $name = $_POST['name']; 

    $phone = $_POST['phone'];

    $email = $_POST['email'];

    $message = $_POST['message'];

    $q = "insert into contact(name, phone, email, message) VALUES('$name','$phone','$email','$message')"  ;
    $result = mysqli_query($con,$q);

    if(!$result){

        die('Error: ' . mysqli_error($con));
        echo "database is not connected";
    }

    else {	

    header('location: index.html');
    exit();
    echo "query inserted into database";
    } 
?>