<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('db_conn.php');

$server_name = $_SERVER['SERVER_NAME'];
if ($server_name == 'tychen.us') {
    $path = 'tychen.us/hbdi';
    $p = 'https://tychen.us/hbdi';
} else {
    $path = 'localhost';
    $p = 'http://192.168.60.107';
}
?>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">

    <title>
        HBDI@FSU
    </title>


    <!--     ##### site CSS ##### -->
    <link rel="stylesheet" type="text/css" href="<?php echo $p; ?>/styles/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $p; ?>/styles/landing_page.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $p; ?>/styles/topnav.css">
    <!--    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->

    <!--    ##### site JS ##### -->
    <script src="<?php echo $p; ?>/scripts/javascripts.js"></script>
    <script src="<?php echo $p; ?>/scripts/tweetjs.js"></script>


    <!--    ##### Google Fonts ##### -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">



    <!--    ##### BootstrapCDN: CSS, JS, Popper.js, and jQuery ##### -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"-->
<!--            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"-->
<!--            crossorigin="anonymous"></script>-->
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"-->
<!--            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"-->
<!--            crossorigin="anonymous"></script>-->
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"-->
<!--          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
    <!--    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"-->
<!--            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"-->
<!--            crossorigin="anonymous"></script>-->



    <!-- ##### kEEp JQuery after Bootstrap ===> modals won't run ##### -->
    <!--     ##### JQuery ##### Bootstrap will load the slim version of jquery, which will screw AJAX ######-->


    <!-- DateTime picker -->
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">


    <!-- ##### fontawesome ##### v -->
    <script src="https://kit.fontawesome.com/58914d790c.js"></script>


        <link rel="icon" href="https://tychen.us/hbdi/favicon.ico">

</head>


