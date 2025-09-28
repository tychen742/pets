<?php
// Create connection
$con=mysqli_connect("localhost","root","redcar","user");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$email = mysqli_real_escape_string ($con, $_POST['email']);
$username = mysqli_real_escape_string ($con, $_POST['username']);
$password = mysqli_real_escape_string ($con, $_POST['password']);
$phone = mysqli_real_escape_string ($con, $_POST['phone']);


$sql = "INSERT INTO Account (email, username, password, phone) VALUES ('$email', '$username', '$password', '$phone')";


if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";


mysqli_close($con);

?>

