<?php
session_start();
$n=$_SESSION['name'];
$b=$_SESSION['blood'];
$p=$_SESSION['phone'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"bloodbank");
$i="INSERT INTO donateblood(Name,Bloodgroup,PhoneNo) VALUES ('$n','$b','$p')";
if(mysqli_query($con,$i))
{
	header("Location:thankyou.php");
}
else{
	echo "ERROR";
}
?>