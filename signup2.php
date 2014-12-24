<?php

$username = $_POST['username'];
$fullname = $_POST['fullname'];
$password = $_POST['password'];
$email = $_POST['email'];


include 'config.php';

$q = "INSERT INTO `users` VALUES ('".$username."', '".$fullname."', '".$password."', '".$email."');";

$done = mysqli_query($conn, $q);

if ($done == true)
{
	header("Location:login.php");
}else{
	header("Location:signup3.php");
}




?>