<?php session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
include("../includes/db_conn.php");


$username = $_POST['username'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$phone = $_POST['phone'];
$email = $_POST['email'];




//
//        $sql = "INSERT INTO user(username, password, phone, email) VALUES ('$username', '$pw', '$phone', '$email')";
//        if(mysqli_query($pdo, $sql))
//        {
//                echo 'Account is successfully created!';
//                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
//        }
//        else
//        {
//                echo 'Account creation failed!';
//                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
//        }
//}

?>