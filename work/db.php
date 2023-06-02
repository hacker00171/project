<?php
echo"<form method='POST' action='index.php'>";
$host="localhost";
$user="root";
$pass="";
$db="log";
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect($host,$user,$pass,$db);
$sql="select*from data where username='".$username."'AND=password='".$password."'limit 1";
$res=mysqli_query($sql);
mysqli_close($con);
if($username==admin && $password==admin)
{
echo"Login success!Welcome";
header("location:index.php");
exits;
}
else
{
echo"<script type='text/javascript'>alert('failed to login')</script>";
}
}
echo"</form>";
?>

