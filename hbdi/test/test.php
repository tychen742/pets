<?php
//include_once('./includes/topnav.php');

echo "Testing basename: " . basename(__FILE__, '.php') . "<br>";
echo "Testing getcwd(): " . getcwd() . "<br>";

$time_created = date('Y-m-d H:i:s', time());
echo $time_created;

echo "<br>";
echo '_SERVER[\'HTTP_USER_AGENT\']: ' . $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo "get_browser(): " . get_browser();
echo "<br>";
echo "<br>";


$token_passing = $uid_hbdi . '-' . time();

echo "Token: " . $token_passing . "<br>";


$now = strtotime("2020-03-25");
echo "date() date is: " . $now . "<br>";

$doc_root = $_SERVER['DOCUMENT_ROOT'];
echo "The DOCUMENT_ROOT is: " . $doc_root, "<br>";

echo "\$p is: " . $p . "<br>";
//error_log("test error log from test.php", 0)


$timestamp = strtotime('01/01/2019 12:00 AM');
echo "TTTThe \$timestamp is: " . $timestamp, "<br>";

echo "The present working directory (__DIR__): " . __DIR__ . "<br>";


$server_name = $_SERVER['SERVER_NAME'];
echo "The SERVER_NAME (\$_SERVER['SERVER_NAME']) is: $server_name <br>";

//ini_set("log_errors", 1);
//ini_set("error_log",$_SERVER['DOCUMENT_ROOT']."/hbdi/test/error_log");


// the message
echo "sending an email: ";
$msg = "This is a test email from \n
hbdi/test.php";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);

// send email
//mail("tc16k@fsu.edu", "My subject", $msg);


phpinfo();
?>