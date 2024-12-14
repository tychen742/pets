<?php //include_once 'headers.php'; ?>

<!-- ########## Log in and Page Title ########## -->

<!--    ##### Login Button #####-->
<div class="container-fluid" style="text-align: right">

    <?php
    if (isset($_SESSION['email_pomodoro'])) {
        echo "Hi, " . $_SESSION['username_pomodoro'] . "&nbsp <a href='https://tychen.us/pomo/user/logout.php' style='color:darkgray'>exit</a>";
    } else {
//        echo " <a href='https://tychen.us/pomo/user/login.php'>Log in</a> or <a href='https://tychen.us/pomo/user/signup.php'>Sign up</a> " . "<br>";
        echo '<div type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#loginModal">Login</div>';
    }
    ?>
</div>


<!-- ##### Login Processing ##### -->
<?php
if (isset($_POST['submitLogin'])) {
//        echo "Logging in...";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT password, email, username, id_user FROM user WHERE email = '$email' ");
    $stmt->execute();
    $result = $stmt->fetch();

    if (empty($result['email'])) {
        echo "This email address is incorrect. Please register or check your email address.";
//        echo '<meta http-equiv=REFRESH CONTENT=5;url=login.php>';
    } elseif ($result['password'] == $password) {
        $_SESSION['email_pomodoro'] = $result['email'];
        $_SESSION['username_pomodoro'] = $result['username'];
        $_SESSION['userid_pomodoro'] = $result['id_user'];
        echo "  Login is successful. Welcome back, " . $result['username'] . "!";
        echo '<meta http-equiv=REFRESH CONTENT=3;url=https://tychen.us/pomo/index.php>';
    } else {
        echo " Your email address or password is not correct. Please try again.";
//        echo '<meta http-equiv=REFRESH CONTENT=3;url=login.php>';
    }
}
?>

<!-- ##### Login Modal ##### -->
<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog" role="document">

        <!-- Modal content-->
        <div class="modal-content" style="width: 400px">
            <div class="modal-header">
                <h4 class="modal-title" style="text-align: left">Log in</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="margin: 0 auto">
                <form alignstyle="center" name="form" method="post" action="">
                    <input type="text" placeholder="email" name="email"/> <br>
                    <input type="password" placeholder="password" name="password"/> <br> <br>
                    <button class="btn btn-warning" type="submit" name="submitLogin"
                            value="Login">Login
                    </button>
                    <button type="button" class="btn btn-warning"
                            onclick="location.href='signup.php' ">Sign up
                    </button>

                </form>
            </div>
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--            </div>-->
        </div>

    </div>
</div>

<!-- ##### Title ##### -->
<div class="container-fluid" style="text-align: center">
    <h1 style="display:inline; "><a href="https://tychen.us/pomo/index.php" style="text-decoration: none;">PPM</a></h1>
    <span> Pomodoro Project Management</span>
</div>

