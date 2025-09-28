<?php

$conn = mysqli_connect("localhost","polochen_polo","redcar2015","polochen_pets");
if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} 
else	
	{
	echo "Connected to MySQL at mysql_connection.inc.php<br>";
	}
//===== CHARSET UTF-8 =====//
mysqli_set_charset($conn,"utf8");
return $conn;	

?>