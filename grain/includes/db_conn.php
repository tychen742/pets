<?PHP

$servername = "localhost";
$dbuser = "grain_user";
$password = "passwd";
$dbname = "grain";



if ($username != null && $pw != null && $pw2 != null && $pw == $pw2) {
    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $dbuser, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "test";
        $sql = "INSERT INTO user(username, password, phone, email) VALUES ('$username', '$pw', '$phone', '$email')";
        $conn->exec($sql);
        echo "New record inserted.";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

else {
    echo 'Something went wrong! You will be routed to the Login page';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}

//$conn = mysqli_connect("localhost", "grain_user", "passwd", "grain");
if (mysqli_connect_errno()) 
//	{
//	echo "Failed to connect to MySQL: " . mysqli_connect_error();
//    } else {
//	echo "Connected to MySQL at mysql_connection.inc.php<br>";
//}
//mysqli_set_charset($conn,"utf8");
return $conn;
?>
