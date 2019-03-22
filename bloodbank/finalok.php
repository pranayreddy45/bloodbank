<?php

session_start();

echo"<h3> Your blood will reached as soon as possible </h3>";


$ph=$_SESSION['phone'];



$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"bloodbank");

$sel="SELECT * FROM reg WHERE PhoneNo='$ph'";
$res=mysqli_query($con,$sel);

$a=mysqli_fetch_array($res);

echo "<h3>Name:</h3>".$a['Name'];
echo "<br>";
echo "<h3>Phone No:</h3>".$a['PhoneNo'];
echo "<br>";
echo "<h3>Address:</h3>".$a['Address']." ".$a['City']." ".$a['State']." ".$a['Country'];

?>