<?php

$username = $_POST['username'];
$password = $_POST['password'];
$is_logedin = false;

include 'config.php';

$sql = "select * from users where username = '".$username."' and password = '".$password."'";
$result = mysqli_query ($conn, $sql);
while ($res = mysqli_fetch_array($result)){
	$is_logedin = true;

}
if ($is_logedin == true){
	setcookie("username",$username);
	header("Location:cp.php");
}else{
	header ("Location:login3.php?error=username");
}



?>

