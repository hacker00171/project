<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','hotel');

// get the post records
$fullName = $_POST['fullName'];
$username = $_POST['username'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];



// database insert SQL code
$sql = "INSERT INTO `hotel` (`fullName`, `username`, `email`, `phoneNumber`, `password`,`confirmPassword`) VALUES ( '$fullName', '$username', '$email', '$phoneNumber','$password','$confirmPassword')";

// insert in database 
$rs = mysqli_query($con, $sql);



if($rs)
{
	echo "Registered Successfully";
	header('refresh:1;url=' . $_SERVER['HTTP_REFERER']);
	//echo "<script>alert('Registered Successfully');</script>";
}

?>