<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
// clear session

$username = $_SESSION['username'];
unset($_SESSION['username']);
echo "Logging $username  out... and directing to the Login page.";
echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
?>