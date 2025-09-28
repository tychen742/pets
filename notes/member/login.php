<?php
session_start();
include '../includes/database.php';
?>
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
    <link rel="stylesheet" type="text/css" href="/../styles/notes.css">
</head>

<header>
    <title>Notes</title>
</header>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
            <?php
            include '../includes/greeting.php';
            ?>
            <h1>log in</h1>

            <FORM name="form" method="POST" action="login_process.php">
                Email: <input title="email" type="text" name="email"/> <br>
                Password: <input title="password" type="password" name="password"/> <br> <br>
                <button class="btn btn-warning" type="submit" name="button" value="Login">Login</button>
                <button type="button" class="btn btn-warning"
                        onclick="location.href='signup.php' ">Sign up
                </button>
                <button type="button" class="btn btn-warning"
                        onclick="location.href='../index.php' " value="Home">Home
                </button>

            </FORM>


        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>