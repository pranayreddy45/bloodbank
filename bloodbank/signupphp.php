<?php

session_start();
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"bloodbank");
$n=$_POST['name'];
$e=$_POST['email'];
$pn=$_POST['phone'];
$p=$_POST['pass'];
$cp=$_POST['confirm'];
$bg=$_POST['blood'];
$a=$_POST['address'];
$cy=$_POST['city'];
$s=$_POST['state'];
$coun=$_POST['country'];

$count=0;

$sel="SELECT * FROM reg";
$rel=mysqli_query($con,$sel);
while($f=mysqli_fetch_array($rel))
{
	if($f['PhoneNo']==$pn)
	{
		$count=1;
	}
}

	

if($count==0)
{

if($p==$cp)
{
    $i="INSERT INTO reg (Name,Email,PhoneNo,Password,Bloodgroup,Address,City,State,Country) VALUES ('$n','$e','$pn','$p','$bg','$a','$cy','$s','$coun')";
    if(mysqli_query($con,$i))
{
    echo "<script> alert('SignUp Sucessful')
		window.location.href='login.php';
		</script>";
}else{
    echo "Error";
}
}

else{
    echo "<script>alert('Error password')
		window.location.href='signup.php'</script>";
}
}

else{
	echo "<script> alert('Account already exist with this phone no.')
		window.location.href='login.php';
		</script>";
}
?>