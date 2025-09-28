<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">

    <title>
        BIR Labs
    </title>

    <!-- ##### site CSS ##### -->
    <link rel="stylesheet" type="text/css" href="../styles/healthdb.css">

    <!-- ##### site JS ##### -->
    <script src="../scripts/javascripts.js"></script>

    <!-- ##### jsPsych ##### -->
    <script src="../jspsych/jspsych.js"></script>

    <!-- ##### BootStrap CSS, JS, Popper, & jQuery ##### -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
            crossorigin="anonymous"></script>
    <!--    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"-->
    <!--            crossorigin="anonymous"></script>-->
    <!-- slim version of jquery would cause $.ajax to complain TypeError: $.ajax() is not a function -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// ##### DB connection
include_once('db_conn.php');


###### display all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//##### set SESSIONs and variables
if (isset($_SESSION['id_worker']) || isset($_SESSION['id_HIT']) || isset($_SESSION['id_assignment'])) {
    $id_worker = $_SESSION['id_worker'];
    $id_HIT = $_SESSION['id_HIT'];
    $id_assignment = $_SESSION['id_assignment'];
    error_log("headers.php SESSIONS present ", 0);
}

?>


<!--<div class="container-fluid" style="margin: 0 auto;">-->