<!DOCTYPE html>
<html>
<head>
	<title>Baseball Statistics</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
	// Define variables
	$first_name = $last_name = " ";
?>
	
	<header>
		<h1>Baseball Statistics</h1>
	</header>

	<tr>
		<td>
		<form method="post" action="#"> 
   		First Name:<input type="text" name="first_name">
		<br><br>
   		Last Name:<input type="text" name="last_name">
   		<br><br>
   		<input type="submit" value="Submit"> 
   		<input type="reset" value="Reset"> 
		</form>
		</td>
	</tr>
<?php

	$db_connection = mysqli_connect("localhost", "Jacky", "0987654321", "baseball");

	echo "<h2>Output:</h2>";
	$query="select * from master where nameFirst='".$_POST['first_name']."' and nameLast='".$_POST['last_name']."'";
	$rs=$db_connection->query($query);									
	$num=$rs->num_rows;
	
	
	while($row=$rs->fetch_assoc()){
		echo "Given Name: {$row['nameGiven']}<br/>";
		echo "Birth Date: {$row['birthMonth']}/{$row['birthDay']}/{$row['birthYear']}<br/>";
		echo "Hometown: {$row['birthCity']}, {$row['birthState']}, {$row['birthCountry']}<br/>";
		echo "Weight: {$row['weight']}<br/>";
		echo "Height: {$row['height']}<br/>";
		echo "Bat Hand: {$row['bats']}<br/>";
		echo "Throw Hand: {$row['throws']}<br/>";	
	}
	
	mysqli_close($db_connection);
?>

<footer>
</footer>
</body>
</html>
