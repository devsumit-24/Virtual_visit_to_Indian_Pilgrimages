<!DOCTYPE html>
<html>
<head>
	<title>Connection</title>
</head>
<body>


<?php
	
	
	//Database Connection

	$con = mysqli_connect('localhost','root','','pilgrimage');

	$uname=$_POST['uname'];
	$uemail=$_POST['uemail'];
	$umessage=$_POST['umessage'];

	$sql="INSERT INTO 'tbl_pilgrimage'('uname','uemail','message') VALUES('$uname','$uemail','$umessage')";

	$rs=mysqli_query($con,$sql);

	if($rs)
	{
		echo "Records Inserted Successfully";
		}
	
	
?>


</body>
</html>