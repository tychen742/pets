<?php session_start(); ?>
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


            <h2>Sign up</h2>

            <!-- ////////// THE FORM ////////// -->
            <form name="form" method="post" action="signup_process.php">
                email: <input type="text" name="email"> * <br>
                <!-- ////// chek ekzisting email, no duplikate //////-->
                password:
                <input type="password" name="password"> * <br> password:
                <input type="password" name="password2"/> * (again)</br> username:
                <input type="text" name="username"> * <br> <br>

                <button class="btn btn-warning" type="submit" name="button"
                        value="Submit">Submit
                </button>
                <button class="btn btn-warning" type="button"
                        onclick="location.href='../index.php';" value="Home">Home
                </button>
            </form>

            <!-- ////////// END OF FORM ////////// -->
        </div>
        <div class="col-sm-3"></div>
    </div>

</body>
</html>