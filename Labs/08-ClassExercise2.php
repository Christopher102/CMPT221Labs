<!DOCTYPE HTML> 
<html lang=“en”> 
<head><meta charset=”UTF-8”> 
	<title> Chris Fioti  </title> 
</head> 
<body> 

<?php      # First just connect to the database.

	echo "<h1> Chris Fioti is Testing Connections </h1>"; 
	echo "<ol>";
	echo "<li> Calling 'connect_db.php' to connect to the database! </li>"; 

	require ("..\connect_db.php");
	
	if( mysqli_ping( $dbc ) )   #  good connection!
		{ echo "<li>Connected! </li>"; 
		echo "<li> MySQL Server " . mysqli_get_server_info( $dbc ). 
		     " connected on "     . mysqli_get_host_info( $dbc )  . 
			 "</li>"; }
		echo "</ol>";
		
	$q = "SHOW TABLES";

	$r = mysqli_query ($dbc, $q);

	if ($r) 
	{
	echo "<li> Query Worked.";
	while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) {
		echo "<li> Table: " . $row[0]; 
		} 
	}		?>
			 
</body>
</html>
