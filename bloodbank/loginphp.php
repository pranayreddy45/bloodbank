<?php
session_start();

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"bloodbank");
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$sel="SELECT * FROM reg WHERE PhoneNo='$phone'";
$rel=mysqli_query($con,$sel);
$rel1=mysqli_fetch_array($rel);

$n=$rel1['Name'];
$e=$rel1['Email'];
$pn=$rel1['PhoneNo'];
$p=$rel1['Password'];
$bg=$rel1['Bloodgroup'];
$a=$rel1['Address'];
$cy=$rel1['City'];
$s=$rel1['State'];
$coun=$rel1['Country'];

$_SESSION['name']=$n;
$_SESSION['email']=$e;
$_SESSION['phone']=$pn;
$_SESSION['blood']=$bg;
$_SESSION['address']=$a;
$_SESSION['city']=$cy;
$_SESSION['state']=$s;
$_SESSION['country']=$coun;



if($p==$pass)
	{
		header("Location:mainpage.php");
		
	}
else
{
	echo "<script> alert('Password is Incorrect')
		window.location.href='login.php';
		</script>";
}


?>