<!DOCTYPE html>
<html>
<head>
	<title>New Connection</title>
</head>
<body>
 		<?php

	// servername => localhost
		// username => root
		// password => empty
		
		
		$conn = mysqli_connect("localhost", "root", "", "pilgrimage");
		
		// Check connection
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];
		
		// Performing insert query execution
		// here our table name is college
		
		$sql = "INSERT INTO pilgrimage VALUES ('$name',
			'$email','$message')";
		
		if(mysqli_query($conn, $sql)){
			echo '<script type="text/javascript">';
                  echo ' alert("Thank You for contacting us")';  //not showing an alert box.
                  echo '</script>';

			
		} else{
			echo "ERROR: Hush! Sorry $sql. ".mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);

		?>

</body>
</html>