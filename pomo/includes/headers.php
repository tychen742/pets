<?php
// ##### start Session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// ##### Includes
include_once 'db_conn.php';
include_once 'page_header.php';
include_once 'functions.php';

// ##### Sessions #####
if ($_SESSION['userid_pomodoro'] != null) {
    $userid_pomodoro = $_SESSION['userid_pomodoro'];
    $email_pomodoro = $_SESSION['email_pomodoro'];
    $username_pomodoro = $_SESSION['username_pomodoro'];
}
//else {
//    echo "Please log in.";
//}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>PomoPM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ########################  STYLE ###################################-->
    <link rel="stylesheet" type="text/css" href="https://tychen.us/pomo/styles/pomo.css">

    <!-- Latest compiled and minified CSS -->
    <link
<!--            rel="stylesheet"-->
<!--            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- jQuery library -->
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="./scripts/scripts.js"></script>

</head>
