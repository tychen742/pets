<?php include "../includes/topnav.php" ?>


    <div class="container" style="width: 90%; max-width: 900px">

        <?php
        /// http://talkerscode.com/webtricks/password-reset-system-using-php.php
        $email_email = $_GET['key'];
        $token_email = $_GET['reset'];
        if (isset($email_email) && isset($token_email)) {
            try {
                $stmt = $pdo->prepare(" SELECT email, account_verify_token FROM user WHERE email = '$email_email' ");
                $stmt->execute();
                $result = $stmt->fetch();
                $email_db = $result['email'];
                $token_db = $result['account_verify_token'];

            } catch (Exception $exception) {
                echo $exception;
                echo $exception;
            }

            if (!isset($email_db)) {
                echo "<div id='php-message'> Having problem with this email address. <br>
 Redirecting... </div>";
                echo "<meta http-equiv=REFRESH CONTENT=3;url=$p/index.php>";
            } elseif ($token_email != $token_db) {
                echo "<div id='php-message'> Hmmm... the reset token is not valid. <br>
 Redirecting to HBDI home... </div>";
                echo "<meta http-equiv=REFRESH CONTENT=3;url=$p/index.php>";
            } else {

                ?>
                <form method="POST" id="php-message">
                    <input type="hidden" name="email_email"
                           value="<?php echo $email_email; ?>">
                    <div> Enter new password:</div>
                    <input type="password" name='password'>
                    <input type="submit" name="submit_password" value="Reset">
                </form>
                <?php
            }
        }
        ?>
    </div>


<?php
if (isset($_POST['submit_password'])) {
    if ((isset($_POST['email_email'])) && (isset($_POST['password']))) {
        $email = $_POST['email_email'];
        $pass = $_POST['password'];
//        echo $pass;
    }
    $pass_hash = password_hash($pass, PASSWORD_BCRYPT);
    $stmt = $pdo->prepare("UPDATE user SET password='$pass_hash' WHERE email='$email'");
    $stmt->execute();
//    echo $stmt->rowCount() . " record(s) updated successfully";

    echo "<div id='php-message'> Your password is updated. <br>
Redirecting to HBDI home...</div>>";
    echo "<meta http-equiv=REFRESH CONTENT=3;url=$p/index.php>";

}
?>