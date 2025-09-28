<?php
session_start();
include("../db_conn.php");
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
    <link rel="stylesheet" type="text/css" href="/../styles/pomodoro.css">
</head>

<header>
    <title>PPTM</title>
</header>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">

            <h3>Signing up</h3>
            <?php

            // https://www.w3schools.com/php/php_form_required.asp
            try {
                if (empty($_POST["email"])) {
                    echo "Email is required." . "<br>";
                    // echo '<meta http-equiv=REFRESH CONTENT=5;url=register.php>';
                } else {
                    $email = validate_input($_POST["email"]);
                }
                if (empty($_POST["password"]) or empty($_POST["password2"])) {
                    echo "Both passwords are required." . "<br>";
                } else {
                    $password = validate_input($_POST["password"]);
                    $password2 = validate_input($_POST["password2"]);
                    if ($password != $password2) {
                        echo "The two passwords must match." . "<br>";
                        echo '<meta http-equiv=REFRESH CONTENT=5;url=register.php>';
                    } else {
                        $password = $password;
                    }
                }
                if (empty($_POST["username"])) {
                    echo "Username is required." . "<br>";
                    // echo '<meta http-equiv=REFRESH CONTENT=5;url=register.php>';
                } else {
                    $username = validate_input($_POST["username"]);
//                    $pdo = Database::connect();
//                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = ("SELECT email FROM user WHERE email = '$email' ");
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetch();

                    if (!empty($result) and ($result) != NULL) {
                        echo "This email is already registered.";
                        // echo '<meta http-equiv=REFRESH CONTENT=3;url=register.php>';
                    } else {

                        try {
//                            $pdo = Database::connect();
//                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "INSERT INTO user (email, password, username) VALUES ('$email', '$password', '$username')";
                            $stmt = $pdo->prepare($sql);
                            $result = $stmt->execute();

                            if ($result) {
                                echo 'Account is successfully created. Please log in. ';
                            }
                        } catch (PDOException $e) {
                            echo $sql . "<br>" . $e->getMessage() . '<br> ';
                            echo 'Account creation failed. Please try again. ';
                            // echo '<meta http-equiv=REFRESH CONTENT=3;url=register.php>';
                        }
                    }
                }
            } catch (Exception $e) {
                echo "error!";
                echo $e;
            }

            // //////// FUNCTION for Validation ///////////
            function validate_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            // ///////// END of FUNCTION for Validation //////////

            ?>

            <!-- ////// Back Home ////// -->

            <br> <br>
            <button type="submit" class="btn btn-warning" onclick="location.href='login.php' ">Log in</button>
            <button type="submit" class="btn btn-warning" onclick="location.href='signup.php' ">Sign up</button>
            <button type="button" class="btn btn-warning" onclick="location.href='../index.php' ">Home</button>

            <div class="col-sm-3"></div>

        </div>
    </div>
</div>
</body>
</html>