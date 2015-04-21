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
   		First Name:<input type="text" name="first_name" value="<?php echo $first_name;?>">
		<br><br>
   		Last Name:<input type="text" name="last_name" value="<?php echo $last_name;?>">
   		<br><br>
   		<input type="submit" name="submit" value="Submit"> 
		</form>
		</td>
	</tr>
<?php
	echo "<h2>Your Input:</h2>";
	echo $first_name;
	echo "<br>";
	echo $last_name;
	echo "<br>";
?>

<footer>
</footer>
</body>
</html>
