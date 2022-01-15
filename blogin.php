<?php

session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$q = " select * from registration where username = '$username' && password='$password' ";

$result = mysqli_query($con,$q);

$row = mysqli_num_rows($result);

if($row == 1){

	$_SESSION['username'] = $username;
	// $userquery = " insert into user(username) values('$username')";
	// $userresult = mysqli_query($con,$userquery) ;
	header('location:upload.php');	
}
else{

	header('location:index.html');
}

?>