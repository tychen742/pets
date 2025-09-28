<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Asia/Taipei');

//database credentials
define('DBHOST','localhost');
define('DBUSER','polochen_polo');
define('DBPASS','redcar2015');
define('DBNAME','polochen_gre');

//application address
define('DIR','http://cycuim.org/');
define('SITEEMAIL','polochen@msn.com');

try {

    //create PDO connection 
    $db = new PDO("mysql:host=".DBHOST.";port=8889;dbname=".DBNAME, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    //show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//includes the user class, pass in the database connection
include('classes/user.php');
$user = new User($db); 
?>