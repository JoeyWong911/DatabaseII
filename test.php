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
	
	// Connect to Server
	$db_connection = mysqli_connect("localhost", "Jacky", "0987654321", "baseball");

	echo "<h2>Output:</h2>";
	
	// Search and Print Player's Basic Information 
	echo "<h3>Player Information</h3>";
	
	$info_query="select * from master where nameFirst='".$_POST['first_name']."' 
					and nameLast='".$_POST['last_name']."'";
					
	$info_rs=$db_connection->query($info_query);									
	
	echo "<table class='show_table' border=1 bgcolor='#FFFFFF' width=100% align='left'>";
	
	echo "<tr>
			<td><b>First Name</b></td>
			<td><b>Last Name</b></td>
			<td><b>Given Name</b></td>
			<td><b>Birth Date</b></td>
			<td><b>Hometown</b></td>
			<td><b>Weight</b></td>
			<td><b>Height</b></td>
			<td><b>Bat Hand</b></td>
			<td><b>Throw Hand</b></td>
			</tr>";
	
	while($row=$info_rs->fetch_assoc()){
		echo "<tr><td>{$row['nameFirst']}</td>";
		echo "<td>{$row['nameLast']}</td>";
		echo "<td>{$row['nameGiven']}</td>";
		echo "<td>{$row['birthMonth']}/{$row['birthDay']}/{$row['birthYear']}</td>";
		echo "<td>{$row['birthCity']}, {$row['birthState']}, {$row['birthCountry']}</td>";
		echo "<td>{$row['weight']}</td>";
		echo "<td>{$row['height']}</td>";
		echo "<td>{$row['bats']}</td>";
		echo "<td>{$row['throws']}</td></tr>";	
	}
	
	echo "</table>";
	
	echo "<br><br>";
	
	// Search and Print Player's Batting Stats
	echo "<br><br><h3>Batting Statistics</h3>";
	
	$bat_query="select * from batting, master where nameFirst='".$_POST['first_name']."' 
					and nameLast='".$_POST['last_name']."' 
					and master.playerID = batting.playerID";
					
					
					
	$bat_rs=$db_connection->query($bat_query);								
	
	echo "<table class='show_table' border=1 bgcolor='#FFFFFF' width=100% align='left'>";
	
	echo "<tr>
			<td><b>First Name</b></td>
			<td><b>Last Name</b></td>
			<td><b>Year</b></td>
			<td><b>Stint</b></td>
			<td><b>Team</b></td>
			<td><b>League</b></td>
			<td><b>G</b></td>
			<td><b>AB</b></td>
			<td><b>R</b></td>
			<td><b>H</b></td>
			<td><b>2B</b></td>
			<td><b>3B</b></td>
			<td><b>HR</b></td>
			<td><b>RBI</b></td>
			<td><b>SB</b></td>
			<td><b>CS</b></td>
			<td><b>BB</b></td>
			<td><b>SO</b></td>
			<td><b>IBB</b></td>
			<td><b>HBP</b></td>
			<td><b>SH</b></td>
			<td><b>SF</b></td>
			<td><b>GIDP</b></td>
			</tr>";
	
	while($row=$bat_rs->fetch_assoc()){
		echo "<tr><td>{$row['nameFirst']}</td>";
		echo "<td>{$row['nameLast']}</td>";
		echo "<td>{$row['yearID']}</td>";
		echo "<td>{$row['stint']}</td>";
		echo "<td>{$row['teamID']}</td>";
		echo "<td>{$row['lgID']}</td>";
		echo "<td>{$row['G']}</td>";
		echo "<td>{$row['AB']}</td>";
		echo "<td>{$row['R']}</td>";
		echo "<td>{$row['H']}</td>";
		echo "<td>{$row['2B']}</td>";
		echo "<td>{$row['3B']}</td>";
		echo "<td>{$row['HR']}</td>";
		echo "<td>{$row['RBI']}</td>";
		echo "<td>{$row['SB']}</td>";
		echo "<td>{$row['CS']}</td>";
		echo "<td>{$row['BB']}</td>";
		echo "<td>{$row['SO']}</td>";
		echo "<td>{$row['IBB']}</td>";
		echo "<td>{$row['HBP']}</td>";
		echo "<td>{$row['SH']}</td>";
		echo "<td>{$row['SF']}</td>";
		echo "<td>{$row['GIDP']}</td></tr>";	
	}
	
	echo "</table>";
	
	echo "<br><br>";

					
	
	mysqli_close($db_connection);
?>

<footer>
</footer>
</body>
</html>
