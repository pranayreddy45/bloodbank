
<html>
	<body>
		<form method='POST'>
			<label> ID <label> <input type='text' name='id'>
			<input type='submit' name='submit' value='submit'>
		</form>
	</body>
</html>


<?php
ini_set( "display_errors", 0);

session_start();

$ph=$_SESSION['phone'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"bloodbank");
$coun=$_POST['country'];
$sta=$_POST['state'];
$cy=$_POST['city'];
$bg=$_POST['blood'];

$count=0;

$d="SELECT * FROM reg WHERE PhoneNo IN(SELECT PhoneNo FROM donateblood WHERE PhoneNo IN(SELECT PhoneNo FROM reg WHERE Country='$coun' AND City='$cy' AND State='$sta' AND Bloodgroup='$bg'))";

$result=mysqli_query($con,$d);

echo "<table border=1>
<tr>
<th> ID </th>
<th> Name </th>
<th> Email </th>
<th> Phone No </th>
<th> Blood Group </th>
<th> Address </th>
<th> City </th>
<th> State </th>
<th> Country </th>
</tr>";
while($a=mysqli_fetch_array($result))
{
	$count=1;
	echo "<tr>";
	echo "<td>".$a['ID']."</td>";
	echo "<td>".$a['Name']."</td>";
	echo "<td>".$a['Email']."</td>";
	echo "<td>".$a['PhoneNo']."</td>";
	echo "<td>".$a['Bloodgroup']."</td>";
	echo "<td>".$a['Address']."</td>";
	echo "<td>".$a['City']."</td>";
	echo "<td>".$a['State']."</td>";
	echo "<td>".$a['Country']."</td>";
	echo "</tr>";
}

	if($count==0)
	{
		echo "<script> alert('Your Required Blood Not Found. Please try in another Location')
		window.location.href='require.php';
		</script>";
	}
	
	
	if($_POST['submit']=="submit"){
	$r=$_POST['id'];
	$dp="SELECT * FROM reg WHERE ID='$r'";
	$dpp=mysqli_query($con,$dp);
	$feth=mysqli_fetch_array($dpp);
	$phno=$feth['PhoneNo'];
	$ins="INSERT INTO relate(Reciver,Donar) VALUES ('$ph','$phno')";
	mysqli_query($con,$ins);
	$del="DELETE FROM donateblood WHERE PhoneNo=(SELECT PhoneNo FROM reg WHERE ID='$r')";
	mysqli_query($con,$del);
	header("Location:finalok.php");
}
?>

