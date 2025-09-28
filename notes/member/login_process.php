<?php
session_start();
include_once("../includes/database.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- ########################  STYLE ###################################-->
<link rel="stylesheet" type="text/css" href="/../styles/notes.css">

</head>

<header>
	<title>Notes</title>
</header>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-7">

<?php
echo "Logging in...";
?>


<?PHP
########## Collect posted data ##########
$email = $_POST['email'];
$password = $_POST['password'];

// ////// PDO statement for SELECT
try{
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT email, id_user, password, username FROM (member)  WHERE email = '$email' ");
    $stmt->execute();
    $result = $stmt->fetch();
    if ($result == NULL) {
        echo "<br><br><br><br>Email address not found. Please register or check your email address.";
        // echo "<meta http-equiv=REFRESH CONTENT=2; url=login.php>";
        echo '<meta http-equiv=REFRESH CONTENT=3;url=login.php>';
    } elseif ($result[password] == $password) {
        $_SESSION['email_notes'] = $result['email'];
        $_SESSION['username_notes'] = $result['username'];
        $_SESSION['userid_notes'] = $result['id_user'];
        echo " <br><br><br> Login is successful. Welcome back, " . $result['username'] . "!";
        echo '<meta http-equiv=REFRESH CONTENT=2;url=../index.php>';
    } else {
        echo "<br><br><br><br> Problem with your email address or password. Please try again.";
        echo '<meta http-equiv=REFRESH CONTENT=3;url=login.php>';
    }
} catch(PDOException $e ) {
 echo $e->getMessage();
    }



?>
</div>
			<div class="col-sm-3></div></div>
		</div>

</body>
</html>