<?php
session_start();
include_once '../includes/database.php';
include '../includes/validate_input.php';
include '../includes/functions.php';
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

            <h3>Signing up</h3>
            <?php

            $password = validate_input($_POST["password"]);
            $password2 = validate_input($_POST["password2"]);
            $email_notes = validate_input($_POST["email"]);
            $username_notes = validate_input($_POST["username"]);
            // https://www.w3schools.com/php/php_form_required.asp
            try {
                if (empty($email_notes)) {
                    echo "Email is required." . "<br>";
                    // echo '<meta http-equiv=REFRESH CONTENT=5;url=register.php>';
                } else {
                    if (empty($password) or empty($password2)
                    ) {
                        echo "Both passwords are required." . "<br>";
                    } else {

                        if
                        ($password != $password2
                        ) {
                            echo "The passwords must match." . "<br>";
                            // echo '<meta http-equiv=REFRESH CONTENT=5;url=register.php>';
                        } else {
                            $password_notes = $password;
                            if ((empty($username_notes))) {
                                echo "Username is required." . "<br>";
                                // echo '<meta http-equiv=REFRESH CONTENT=5;url=register.php>';
                            } else {
//                                echo $email_notes . '<br>';
//                                echo $email_notes . '<br>';
//                                $pdo = Database::connect();
//                                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////                                $sql = "SELECT email FROM users WHERE email = 'tychen742@gmail.com'  ";
//                                $sql = ("SELECT email FROM users WHERE email = $email_notes ");
//                                $stmt = $pdo->prepare($sql);
//                                $stmt->execute();
//                                $result = $stmt->fetch();
                                $result = getSingleValue(email, member, email, $email_notes);
                                if (!empty($result) and ($result) != NULL) {
                                    echo "This email is already registered.";
                                    // echo '<meta http-equiv=REFRESH CONTENT=3;url=register.php>';
                                } else {
                                    $pdo = Database::connect();
                                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                                    global $pdo;

                                    $sql = ("INSERT INTO member (email, password, username) VALUES ('$email_notes', '$password_notes', '$username_notes') ");
                                    $stmt = $pdo->prepare($sql);
                                    $result = $stmt->execute();

                                    if ($result) {
                                        echo 'Account is successfully created. Please log in. ';


                                        {
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            } catch
            (PDOException $e) {
                echo 'Account creation failed. Please try again. <br>';
                echo $e->getMessage() ;
                // echo '<meta http-equiv=REFRESH CONTENT=3;url=register.php>';
            }

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