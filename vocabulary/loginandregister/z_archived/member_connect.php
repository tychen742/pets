<?PHP
session_start(); 
include("db_conn.php");
?>
<?PHP
$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = mysqli_query ($conn_iss, "SELECT * FROM pec.users WHERE username = '$id' ");
$row = mysqli_fetch_array ($sql);

if($id != null && $pw != null && $row[2] == $id && $row[3] == $pw) {
	$_SESSION['username'] = $id;
	echo 'Successfully logged in!';
	echo '<meta http-equiv=REFRESH CONTENT=1;url=learn.php>';
	}
else {
    echo 'Login failure at member-login_process.php';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
	}
?>