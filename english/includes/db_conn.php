<?PHP
$conn = mysqli_connect("localhost", "grain_user", "passwd", "grain");
if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
	echo "Connected to MySQL at mysql_connection.inc.php<br>";
}
mysqli_set_charset($conn,"utf8");
return $conn;
?>
