<?php
include '../includes/headers.php';
?>

<div class="">
    <div class="col-sm-2"></div>
    <div class="col-sm-7">

        <?php

        if (isset($_POST['submitLogin'])) {
            echo "Logging in...";
            $email = $_POST['email'];
            $password = $_POST['password'];

            // ////// PDO statement for SELECT
            //            $pdo = Database::connect();
            $stmt = $pdo->prepare("SELECT password, email, username, id_user FROM user WHERE email = '$email' ");
            $stmt->execute();
            $result = $stmt->fetch();
            //            echo "The email address is:" . $result['email'] . "<br>";
            //            echo "The email address is:" . $result['username'] . "<br>";
            //            echo "The email address is:" . $result['id_user'] . "<br>";
            if (empty($result['email'])) {
                echo "This email address is incorrect. Please register or check your email address.";
                // echo "<meta http-equiv=REFRESH CONTENT=2; url=login.php>";
                echo '<meta http-equiv=REFRESH CONTENT=5;url=login.php>';
            } elseif ($result['password'] == $password) {
                $_SESSION['email_pomodoro'] = $result['email'];
                $_SESSION['username_pomodoro'] = $result['username'];
                $_SESSION['userid_pomodoro'] = $result['id_user'];
                echo "  Login is successful. Welcome back, " . $result['username'] . "!";
                echo '<meta http-equiv=REFRESH CONTENT=3;url=../index.php>';
            } else {
                echo " Your email address or password is not correct. Please try again.";
                echo '<meta http-equiv=REFRESH CONTENT=3;url=login.php>';
            }
        }
        ?>

        <div class="">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-7">

                    <h3>Log in</h3>

                    <form alighstyle="center" name="form" method="post" action="">
                        Email: <input type="text" name="email"/> <br>
                        Password: <input type="password" name="password"/> <br> <br>
                        <button class="btn btn-warning" type="submit" name="submitLogin"
                                value="Login">Login
                        </button>
                        <button type="button" class="btn btn-warning"
                                onclick="location.href='signup.php' ">Sign up
                        </button>
                        <button type="button" class="btn btn-warning"
                                onclick="location.href='../index.php' " value="Home">Home
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3"></div>
</div>

