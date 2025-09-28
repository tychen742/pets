<?php
error_log("test3.php loaded.");
$test = $_POST['ttt'];
$test2 = $_POST['test2'];
//echo "test: $test";
error_log("test should be here: $test", 0);
error_log("end of test3.php");

//
//$bar = isset($_POST['bar']) ? $_POST['bar'] : null;
//
//error_log($bar);
//error_log("visited");

?>

