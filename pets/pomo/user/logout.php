<?php session_start(); ?>


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
<link rel="stylesheet" type="text/css" href="/../styles/pomodoro.css">
</head>

<header>
	<title>PPTM</title>
</header>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-7">
				<!-- ########### clear session ############ -->
<?php
// $username_pomodoro = $_SESSION['username_pomodoro'];
echo "<br><br><br><br><br> Logging " . $username_pomodoro . "out...";
unset($_SESSION['username_pomodoro']);
unset($_SESSION['userid_pomodoro']);
unset($_SESSION['email_pomodoro']);
echo '<meta http-equiv=REFRESH CONTENT=1;url=../index.php>';
?>
</div>
			<div class="col-sm-3"></div>
		</div>
	</div>

</body>
</html>