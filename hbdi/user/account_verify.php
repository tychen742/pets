<?php include "../includes/topnav.php";

$this_page = $_SERVER['PHP_SELF'];
error_log("this-page @account_verify.php is: $this_page", 0);
?>


    <div class="container-fluid" id="divUserElement">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <?php
                if ($_GET['key'] && $_GET['verify']) {
                    $email_from_email = $_GET['key'];
                    $token_from_email = $_GET['verify'];
                    try {
                        $stmt = $pdo->prepare(" SELECT username, email, account_verify_token FROM user WHERE email = '$email_from_email' ");
                        $stmt->execute();
                        $result = $stmt->fetch();
//                    TODO: validate email with email_db as double check
                        if (isset($result)) {
                            $token_from_db = $result['account_verify_token'];
                        } else {
                            echo "<scrip> showMessage('The email and verification token are received but something went wrong. Contact the Support Team for help if the problem persists. <br> Redirecting to HBDI Home in 10 seconds...')</scrip>";
                            error_log('Email and token are correct but the information but... @signup_verify.php');
                            echo "<meta http-equiv=REFRESH CONTENT=10;url=$p/index.php>";
                            exit();
                        }
                    } catch (Exception $exception) {
                        echo $exception->getMessage();
                    }
// TODO: the confirm page style is from ??????

                    ?>
                    <form method="post">
                        <input type="text" name="token_from_db" hidden
                               value="<?php echo $token_from_db; ?>">
                        <input type="text" name="token_from_email" hidden
                               value="<?php echo $token_from_email; ?>">
                        <input type="hidden" name="email_from_email" value="<?php echo $email_from_email; ?>">
                        <div style=" font-size: 1rem"> Please click the CONFIRM button below to verify your HBDI account creation request
                            from <?php echo $email_from_email; ?>:
                            <br><br>
                            <input type="submit" class="btn btn-danger"
                                   style="background-color: #782f40; box-shadow: 3px 3px 3px #CEB888; border: none" name="submit_verify"
                                   value="Confirm">
                        </div>
                    </form>
                    <?php
                }
                ?>

            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
    <!-- ##### end of signUp Verify HTML ##### -->

    <!-- ##### signUp Verify PHP ##### -->
<?php
if (isset($_POST['submit_verify'])) {
    error_log("Confirmation button clicked @signup_verify.php", 0);
    if ((isset($_POST['email_from_email'])) && (isset($_POST['token_from_email'])) && (isset($_POST['token_from_db']))) {
        $email_from_email = $_POST['email_from_email'];
        $token_from_email = $_POST['token_from_email'];
        $token_from_db = $_POST['token_from_db'];

        if ($token_from_email == $token_from_db) {
            $time_verified = time();
            $time_verified = date('Y-m-d H:i:s', $time_verified);
            $stmt = $pdo->prepare(" UPDATE user SET time_verified = '$time_verified' WHERE account_verify_token = '$token_from_db'");
            $stmt->execute();
            echo "
        <script> showMessage (' Congratulations! Your HBDI account creation is verified. <br> Redirecting your to HBDI Home in 5 seconds.'); </script>
        ";
            echo "<meta http-equiv=REFRESH CONTENT=5;url=$p>";
            exit;
        } else {
            echo "
        <script> showMessage (' The account verification is not successful (token incorrect). Please try again. Contact the HBDI Support Team if the issue persists. <br> Redirecting your to HBDI Home in 10 seconds.'); </script>
        ";
            echo "<meta http-equiv=REFRESH CONTENT=10;url=$p>";
            exit;
        }
    }
}
// TODO: change flow to email click -> verify directly -> send verification success email.
?>

