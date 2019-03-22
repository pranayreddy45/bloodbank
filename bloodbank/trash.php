<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"bloodbank");
$sel="SELECT PhoneNo FROM reg WHERE ID=1";
$s=mysqli_query($con,$sel);
$a=mysqli_fetch_array($s);

echo $a['PhoneNo'];
?>