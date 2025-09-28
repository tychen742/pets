<?php
include_once("/var/www/tychen.us/hbdi/scripts/utilities.php");
include_once("/var/www/tychen.us/hbdi/includes/login_loader.php");
include_once("/var/www/tychen.us/hbdi/includes/topnav.php");
$root_path = '/var/www/tychen.us/hbdi';

?>
<!-- TODO: add a cookie here and after 3 logins, get rid of the login message when the user is familiar with the flow ???  -->


<!-- ##### The Add File / Upload Modal: file upload  ##### -->
<div class="modal fade" id="fileModalUpload">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formFileUpload" method="POST" action="https://tychen.us/hbdi/scripts/file_menu.php" enctype="multipart/form-data">
                <div class="modal-header">
                    <!--                    <h4 class="modal-title">Add Files </h4>-->
                    <h4 class="modal-title"> Upload Files </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;
                    </button>
                </div>
                <div class="modal-body">
                    <input name="userfile" type="file" id="userfile" style="padding-left: 20px; margin-bottom: 10px">
                    <input type="text" id="id_project" name="id_project" value="" hidden>

                    <div>
                        <input type="checkbox" id="check_HIPAA" onclick="msgHIPAA();" name="compliance[]"
                               value="HIPAA" id="HIPAA"> File contains HIPAA data
                        <div style="display: none" class="msg_HIPAA">
                            <i class="fas fa-check"></i> &nbsp; User HIPAA clearance verified
                        </div>
                        <div style="display: none" class="msg_HIPAA">
                            <i class="fas fa-check"></i> &nbsp; Device HIPAA audit inventory verified
                        </div>
                    </div>

                    <div><input type="checkbox" name="compliance[]"
                                id="Human_Subject" value="Human_Subject"> File contains Human Subject data
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                                value="FDA-part11" FDA-part11"> File contains FDA - part 11 data
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                                value="compliance_other" style="color: grey"> Other
                    </div>

                    <hr data-content="AND" class="hr-text" style="position: relative; width: 250px">

                    <div>
                        <input type="checkbox" id="check_FSU_protected" onclick="msgFSUProtected()" name="compliance[]"
                               value="FSU_protected" id="FSU_protected"> File contains FSU protected data
                        <div style="display: none" class="msg_FSU_protected">
                            <i class="fas fa-check"></i> &nbsp; <a href="https://its.fsu.edu/ispo/policy/information-privacy">FSU protected
                                                                                                                              data</a> will be
                                                         accessed by authorized users only.
                        </div>
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                                value="FSU_private" id="FSU_private"> File contains FSU private data
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                                value="FSU_public" id="FSU_public"> File contains FSU public data
                    </div>

                    <hr data-content="AND" class="hr-text" style="position: relative; width: 250px">

                    <div><input type="checkbox" name="compliance[]"
                                value="dataset" id="dataset" style="color: grey"> Dataset (structured, semi-structured, text...)
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                                value="document" id="document" style="color: grey"> Document (draft, manuscript, preprint...)
                    </div>
                    <div><input type="checkbox" name="compliance[]"
                                value="file_other" style="color: grey"> Other
                    </div>

                    <hr data-content="AND" class="hr-text" style="position: relative; width: 250px">


                    <?php
                    if (isset($id_project)) {
                        ?>
                        <div style="padding-left: 20px">
                            <select class="content-item" name="title_project_short" id='title_project_short' style="width: 50%;" required="required">
                                <option selected="selected" disabled hidden> Project</option>
                                <?php
                                $projects = $pdo->query(" SELECT DISTINCT id_project FROM project_user WHERE id_user = '$uid_hbdi' ")->fetchAll();
                                foreach ($projects as $project) {
                                    $id_project = $project['id_project'];
                                    $pts = $pdo->query("SELECT title_project_short, id_creator FROM projects WHERE id_project = '$id_project' ")->fetch();
                                    $title_project_short = $pts['title_project_short'];
                                    echo "<option id='id_project' value='$id_project'> $title_project_short </option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div><br></div>
                        <?php
                    }
                    /*unset($id_project);*/
                    ?>

                    <!-- <input type="hidden" name="title_project_short" id="title_project_short" value="<?php //echo $title_project_short; ?>"> -->
                    <input type="hidden" name="username_hbdi" id="username_hbdi" value="<?php echo $username_hbdi; ?>">
                </div>
                <div class="modal-footer">
                    <input class="btn" name="submitFileUpload" id="submitFileUpload" value="SEND" data-dismiss="modal"
                           style="width: 95px; height: ; margin: 10px 20px; padding: 2px 5px" onclick="form_submit()">
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function msgHIPAA() {
        var checkBox = document.getElementById("check_HIPAA");
        if (checkBox.checked == true) {
            document.getElementsByClassName("msg_HIPAA")[0].style.display = "block";
            document.getElementsByClassName("msg_HIPAA")[1].style.display = "block";
        } else {
            document.getElementsByClassName("msg_HIPAA")[0].style.display = "none";
            document.getElementsByClassName("msg_HIPAA")[1].style.display = "none";
        }
    }

    function msgFSUProtected() {
        let checkBox = document.getElementById("check_FSU_protected");
        if (checkBox.checked == true) {
            document.getElementsByClassName("msg_FSU_protected")[0].style.display = "inline-block";
        } else {
            document.getElementsByClassName("msg_FSU_protected")[0].style.display = "none";
        }
    }
</script>
<script type="text/javascript">
    function form_submit() {
        document.getElementById("formFileUpload").submit();
    }
</script>
<!-- ##### end of file modal upload file ##### -->


<!-- ##### Log In Login Modal ##### -->
<!-- TODOO: solved. it's requiring double log-in to log into the system. Why??? -->
<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog role=" document">

    <div class="modal-content">

        <form name="form" method="post" action="">
            <div class="modal-header">
                <div class="modal-title"> Log In</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <!--                        <label>Email address</label>-->
                    <input type="text" placeholder="email" name="email" class="form-control">
                    <!--                        <small class="form-text text-muted"> We keep your information private. </small>-->
                </div>

                <div class="form-group">
                    <!--                        <label>Password</label>-->
                    <input type="password" placeholder="password" name="password" class="form-control">
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn" type="submit" name="submitLogIn"> Log In
                </button>

                <button class="btn" data-toggle="modal" type="button" data-dismiss="modal"
                        data-target="#signupModal" name="submitSignUp" style="width: auto; background-color: #915664"
                        value=""> Sign Up
                </button>
                <div>
                    Forget your password? <span style="color: #915664; font-weight: 500" data-toggle="modal" data-target="#resetPwModal"
                                                data-dismiss="modal"> Reset Password </span>
                </div>
            </div>

        </form>
    </div>
    <!-- end of class: model content        -->
</div>

<!-- ##### End of Login Modal ##### -->
<!-- ##### Login Processing for Login Modal ##### -->
<?php
//error_log("Before login processing @topnav.php", 0);


if (isset($_POST['submitLogIn'])) {
    error_log("Login submitted @topnav.php... ", 0);

    // ##### save POSTed email and password to variables #####
    if (isset($_POST['email'])) {
        $email_posted = $_POST['email'];
        error_log('email posted to @topnav.php for login modal processing', 0);
    } else {
        error_log('email not posted to @topnav.php for login modal processing', 0);
    }
    if (isset($_POST['password'])) {
        $password_posted = $_POST['password'];
//        error_log("password posted to @topnav.php for login modal processing: $password_posted", 0);
        error_log("password posted to @topnav.php for login modal processing", 0);
    } else {
        error_log("password not posted to @topnav.php for login modal processing", 0);
    }
//        $password = password_hash($password, PASSWORD_DEFAULT);

// ##### get User info and check account Activation from DB.user #####
    $stmt = $pdo->prepare("SELECT password, email, username, id_user, time_verified FROM user WHERE email = '$email_posted' ");
    $stmt->execute();
    $result = $stmt->fetch();
    if ($result) {
        error_log('query ran successfully @topnav.php', 0);
        $password_from_db = $result['password'];
        $email_from_db = $result['email'];
        $user_time_verified = $result['time_verified'];

        // ##### check Account Activation #####
        if ($user_time_verified) {
            // ##### verify password #####
            $isValid = password_verify($password_posted, $password_from_db);
            if ($isValid) {
                // ##### Create SESSIONS ##### //{
                error_log("Password is a match", 0);
                $_SESSION['email_hbdi'] = $result['email'];
                $_SESSION['username_hbdi'] = $result['username'];
                $_SESSION['uid_hbdi'] = $result['id_user'];
                error_log("Sessions created @ topnav.php ");

                // TODO: what is this?
                $uid_hbdi = $_SESSION['uid_hbdi'] = $result['id_user'];
//                $time_login = time();
//                $datetime_login = date('Y-m-d H:i:s', $time_login);

// ##### get and insert HTTP_USER_AGENT
                $http_user_agent = $_SERVER['HTTP_USER_AGENT'];
                $result = $pdo->query(" SELECT id_user, http_user_agent FROM location WHERE http_user_agent = '$http_user_agent'")->fetchAll();

                $location_exist = false;
                foreach ($result as $record) {
                    if (($record['id_user'] == $uid_hbdi) && ($record['http_user_agent'] == $http_user_agent)) {
                        $location_exist = true;
                    }
                }

                if (($location_exist != true)) {
                    $msg = " This a new device/browser for this account. Saving as new location...";
                    echo "<script> setTimeout(showMessage('$msg'), 5000); </script>";
                    error_log("echo \"<script> setTimeout(showMessage(' $msg '), 5000); </script>\"", 0);
// TODO: create a modal for user to agree to register this device.

                    $ip = new Get_IP_Address();
                    $ip_address = $ip->getRealIpAddr();

                    $stmt = $pdo->prepare(" INSERT INTO location (id_user, ip_address, http_user_agent) VALUES (?, ?, ?) ");
                    $stmt->execute([$uid_hbdi, $ip_address, $http_user_agent]);
                } else {
                    $msg = " This device/browser for this account has been verified. ";
                    echo "<script> setTimeout(showMessage('$msg'), 5000); </script>";
                }
                // ##### end of get and insert HTTP_USER_AGENT

                // ##### login record in transaction_store records #####
//                $time_login = date('Y-m-d H:i:s', time());

                $ip = new Get_IP_Address();
                $ip_address = $ip->getRealIpAddr();

                $stmt = $pdo->prepare(" INSERT INTO transaction_store (id_user, ip_address, login) VALUES (?, ?, ?) ");
                $stmt->execute([$uid_hbdi, $ip_address, 1]);
                echo '<script> showMessage("Login successful. <br> Redirecting to your Dashboard..."); </script>';
                echo "<meta http-equiv=REFRESH CONTENT=2;url=$p/dashboard.php>";
                unset($_POST['submitLogIn']);
                exit;
            } else {
                echo '<script> showMessage("Password is incorrect. <br> Redirecting to HBDI Home..."); </script>';
                error_log('password INCorrect (topnav.php)', 0);
                echo "<meta http-equiv=REFRESH CONTENT=3;url=$p>";
                exit;
            }
        } else {
            // ##### your account is not activated.
            echo '<script> showMessage("Your account is not activated. <br> Please check your account creation confirmation email to activate. <br> Redirecting to HBDI Home in 5 seconds..."); </script>';
            error_log('Account not activated @topnav.php', 0);
            echo "<meta http-equiv=REFRESH CONTENT=3;url=$p>";
            exit;
        }
    } else {
        // ##### problem with DB
        error_log('query NOT run successfully @topnav.php', 0);
        echo "<script> showMessage('Email or password information incorrect. Please try again.<br> Contact Support if problem persists. <br> Redirecting to HBDI Home in 5 seconds...'); </script>";
        echo "<meta http-equiv=REFRESH CONTENT=3;url=$p/index.php>";
        exit;
    }
}
?>
</div>
<!-- ##### end of log in login processing ##### -->


<!--  ##### beginning Sign Up SignUp Modal ##### -->
<!-- ##### script for signUp modal ##### -->
<script>
    function validate() {
        submit = true;
        var name_first_error = "";
        var name_last_error = "";
        var username_error = "";
        var email_error = "";
        var password1_error = "";
        var password2_error = "";
        var affiliation_error = "";

        var name_first = document.getElementById('name_first');
        var name_last = document.getElementById('name_last');
        var username = document.getElementById('username');
        var email = document.getElementById('email');
        var password1 = document.getElementById('password1');
        var password2 = document.getElementById('password2');
        var affiliation = document.getElementById('affiliation');

        //https://stackoverflow.com/questions/13283470/regex-for-allowing-alphanumeric-and-space
        var alphanumerics = /^[\w\-\s.'"()]+$/;
        if (name_first.value === "" || !(name_first.value.match(alphanumerics))) {
            name_first_error = "Please provide a valid first name.";
            document.getElementById('name_first_error').innerHTML = name_first_error;
            submit = false;
        } else if (name_last.value === "" || !(name_last.value.match(alphanumerics))) {
            name_last_error = "Please provide a valid last name.";
            document.getElementById('name_last_error').innerHTML = name_last_error;
            submit = false;
            return submit;
        } else if (username.value === "" || !(username.value.match(alphanumerics))) {
            username_error = "Please provide a valid username.";
            document.getElementById('username_error').innerHTML = username_error;
            submit = false;
            return submit;
            // } else if (email.value === "" || email.value.indexOf("@") === -1 || email.value.indexOf(".") === -1) {
        } else if (email.value === "" || !(validateEmail(email.value))) {
            email_error = "Please provide a valid email address.";
            document.getElementById("email_error").innerHTML = email_error;
            submit = false;
            return submit;
        } else if (password1.value === "") {
            password1_error = "Please provide a valid password.";
            document.getElementById("password1_error").innerHTML = password1_error;
            submit = false;
            return submit;
        } else if (password2.value === "") {
            password2_error = "Please provide a valid password.";
            document.getElementById("password2_error").innerHTML = password2_error;
            submit = false;
            return submit;
            //    TODO: password length/complexity requirement???
        } else if (password1.value !== password2.value) {
            password_match_error = "The two passwords do not match.";
            document.getElementById("password_match_error").innerHTML = password_match_error;
            submit = false;
            return submit;
        } else if (affiliation.value === "") {
            affiliation_error = "Please provide a valid affiliation title.";
            document.getElementById("affiliation_error").innerHTML = affiliation_error;
            submit = false;
            return submit;
        }
        return submit;
    }

    function removeWarning() {
        document.getElementById(this.id + "_error").innerHTML = '';
    }

    // onkeyup needs to be placed AFTER the form to work
    document.getElementById("name_first").onkeyup = removeWarning;
    document.getElementById("name_last").onkeyup = removeWarning;
    document.getElementById("username").onkeyup = removeWarning;
    document.getElementById("email").onkeyup = removeWarning;
    document.getElementById("password1").onkeyup = removeWarning;
    document.getElementById("password2").onkeyup = removeWarning;
    document.getElementById("password_match").onkeyup = removeWarning;
    document.getElementById("affiliation").onkeyup = removeWarning;

    function validateEmail(email) {
        // var reg = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        // Not good. didn't detect $$### only @@ https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
        var
            reg = /^[-!#$%&'*+/0-9=?A-Z^_a-z{|}~](\.?[-!#$%&'*+/0-9=?A-Z^_a-z{|}~])*@[a-zA-Z](-?[a-zA-Z0-9])*(\.[a-zA-Z](-?[a-zA-Z0-9])*)+$/;
        return reg.test(email);
    }
</script>
<!-- ##### script for SignUp Modal form checks ##### -->
<div class="modal fade" id="signupModal" role="dialog">
    <div class="modal-dialog" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <form enctype="multipart/form-data" method="POST" onsubmit="return validate();">
                <div class="modal-header">
                    <h4 class="modal-title"> Sign Up </h4>
                    <span>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </span>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <input type="text" name="name_first" id="name_first"
                               placeholder="First Name"
                               class="form-control">
                        <div>
                            <div id="name_first_error" class="signUpError"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="name_last" id="name_last"
                               placeholder="Last Name"
                               class="form-control">
                        <div>
                            <div id="name_last_error" class="signUpError"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="username" id="username"
                               placeholder="Username"
                               class="form-control">
                        <div><span id="username_error" class="signUpError"></span></div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="email" id="email"
                               placeholder="Email address"
                               class="form-control">
                        <div><span id="email_error" class="signUpError"></span></div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="password1" id="password1"
                               placeholder="Password"
                               class="form-control">
                        <div><span id="password1_error" class="signUpError"></span></div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="password2" id="password2"
                               placeholder="Password again" class="form-control">
                        <div><span id="password2_error" class="signUpError"></span></div>
                        <div><span id="password_match_error" class="signUpError"></span></div>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="affiliation" id="affiliation"
                               placeholder="Affiliation">
                        <div>
                            <span id="affiliation_error" class="signUpError"> </span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submitSignUp" id="submitSingUp" style="color: white"
                            class="btn"
                            value="sign up"> Sign Up
                    </button>
                    <button class="btn" style="float: right; background-color: #915664" value="" data-toggle="modal" data-target="#loginModal"
                            data-dismiss="modal"> log in
                    </button>

                    <div>
                        Forget your password? <span style="color: #915664; font-weight: 500" data-toggle="modal" data-target="#resetPwModal"
                                                    data-dismiss="modal"> Reset Password </span>
                    </div>
                </div>
            </form>
        </div>
        <!-- end of modal content       -->
    </div>
</div>
<!-- ##### End of Sign Up signUp Modal ##### -->

<!-- ##### Sing Up SignUP Modal Processing ##### -->
<?php
if (isset($_POST['submitSignUp'])) {  //  working.

    error_log("signUp POSTed @topnav signUp modal", 0);
    $name_first = $name_last = $username = $email = $password1 = $password2 = $affiliation = "";

//    function test_input($data) // needed before called
//    {
//        $data = trim($data);
//        $data = stripslashes($data);
//        $data = htmlspecialchars($data);
//        return $data;
//    }
//    $name_first = test_input($_POST['name_first']);
//    $name_last = test_input($_POST['name_last']);
//    $username = test_input($_POST['username']);
//    $email = test_input($_POST['email']);
//    $pwd1 = $_POST['password1'];
//    $pwd2 = $_POST["password2"];
//    $affiliation = test_input($_POST['affiliation']);

    $name_first = $_POST['name_first'];
    $name_last = $_POST['name_last'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd1 = $_POST['password1'];
    $pwd2 = $_POST["password2"];
    $affiliation = $_POST['affiliation'];

// https://www.w3schools.com/php/php_form_required.asp

//    if (!preg_match("/^[\w-.]+$/", $name_first)) {
//        echo "<div class='php-message'> Only letters are allowed in First Name. </div><br>";
//    } elseif (!preg_match("/^[\w-.]+$/", $name_last)) {
//        echo "<div class='php-message'> Only letters are allowed in Last Name. </div><br>";
//    } elseif (!preg_match("/^[\w-.]+$/", $username)) {
//        echo "<div class='php-message'> Only letters and numbers are allowed in User Name. </div><br>";
//    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        echo "<div class='php-message'> Email ($email) format incorrect. </div><br>";
//    } elseif (!preg_match("/^[\w-.]+$/", $affiliation)) {
//        echo "<div class='php-message'> Affiliation: Please use only alphanumerical characters ($affiliation). </div><br>";
//        error_log("There's an error with your input. ", 0);
//        exit();
//    } else {

    // ### password hash
    $pass_hash = password_hash($pwd1, PASSWORD_DEFAULT);
    // ### generate verification token
    $account_verify_token = substr("abcdefghijklmnopqrstuvwxyz", mt_rand(0, 25), 1) . substr(md5(time()), 1);

    // ### check email availability
//    TODO: move this to the signUp form in signUp modal using AJAX to check email availability
    // TODO: account needs to be confirmed within one hour of registration or the link will become invalid.
    $result = $pdo->query("SELECT email, username FROM user WHERE email = '$email' ")->fetch();
    $email_db = $result['email'];
    $username_db = $result['username'];
    if (!empty($email_db)) {
        error_log("Email address taken @topnav.php", 0);
        echo "<script> showMessage('This email address is associated with an existing account. <br> Reset the password if this is your email address or <br> sign up using a different email address. <br> Redirecting to HDBI Home in 5 seconds...'); </script>";
        echo "<meta http-equiv=REFRESH CONTENT=5;url=$p/index.php>";
        exit();
    } elseif (!empty($username_db)) {
        error_log("User name is taken @topnav.php", 0);
        echo "<script> showMessage('This username is associated with an existing account. <br> Please choose a different username. <br> Redirecting to HDBI Home in 10 seconds...'); </script>";
        echo "<meta http-equiv=REFRESH CONTENT=10;url=$p/index.php>";
        exit();
    } else {

        // ### insert user account information
        try {
            echo "<script> showMessage('Recording user data and generating verification email...'); </script>";

            $user_time_registered = date('Y-m-d H:i:s', time());
//            keep registered instead of changing to signup because of the tense.

            $sql = "INSERT INTO user (email, password, username, name_first, name_last, affiliation, account_verify_token, time_registered ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$email, $pass_hash, $username, $name_first, $name_last, $affiliation, $account_verify_token, $user_time_registered]);

            // ##### send email with token link #####
            $link = "<a href='$p/user/account_verify.php?key=" . $email . "&verify=" . $account_verify_token . "'> Click HERE to confirm your HBDI account creation</a>";
            // ### http://talkerscode.com/webtricks/password-reset-system-using-php.php
            try {
                // ### the headers: https://stackoverflow.com/questions/28026932/php-warning-mail-sendmail-from-not-set-in-php-ini-or-custom-from-head
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'From: support@hbdi<support@hbdi.fsu.edu>' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// ### the message ###
                $msg = "
***** DO NOT reply to this email. ***** <br>
This is an automatically generated email. Contact the Support Team through the website for support. <br><br>
Please click on the link to verify your new HBDI account creation: $link. <br>

If the link is not working for you, please copy and paste the URL below
to the address bar of your browser and hit enter to process your HBDI sign-up:<br>
$p/user/account_verify.php?key=$email&verify=$account_verify_token
";

// ### use wordwrap() if lines are longer than 70 characters
                $msg = wordwrap($msg, 70);
// ### send email
                mail("$email", "HBDI: Account Creation Verification", "$msg", "$headers");
// ### message user

                echo "<script> showMessage('A verification email from support@hbdi is sent to $email. <br> Use the email to verify your account creation. <br> Redirecting to HBDI Home in 5 seconds...'); </script>";
                echo "<meta http-equiv=REFRESH CONTENT=5;url=$p/index.php>";
                exit();
// ### send email exception
            } catch
            (Exception $emailException) {
                echo $emailException;
            }

            echo "<meta http-equiv=REFRESH CONTENT=5;url=$p/index.php>";
            error_log("the web path here is: $p", 0);
            exit();
// ### insert user account information exception
        } catch (PDOException $e) {
            echo "<script> 
showMessage('Something went wrong and your account was not created. Please try again. The error message is: <br> + $e->getMessage(). <br> Contact the support team if the issue persists. ');
                        </script>";
            echo "<meta http-equiv=REFRESH CONTENT=10;url=$p>";
            exit();
        }
//    }
//        }
//    } catch (Exception $e) {
//        echo "error!";
//        echo $e->getMessage();
    }
//    }
}
?>
<!-- ##### END of SIgn up SignUp Modal PHP Processing ##### -->


<!-- ##### Log OUT Logout Modal ##### -->
<div class="modal fade" id="logoutModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form name="form" method="post" action="">
                <div class="modal-header">
                    <h4 class="modal-title"> Log Out </h4>
                    <span>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </span>
                </div>

                <div class="modal-body">
                    <div style="margin: 0 auto; text-align: center; font-size: 1.25rem; color: #782f40"> Thank you for using HBDI. See you soon!</div>
                    <br>
                    <br>

                </div>
                <div class="modal-footer">
                    <button class="btn" type="submit" name="submitLogOut"
                            value=""> Log Out
                    </button>
                    <button class="btn" data-dismiss="modal"
                            value="" style="background-color: #915664"> cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ##### End of Logout Modal ##### -->
<!-- ##### Logout Processing ##### -->
<!-- TODO: add a cookie here and after 3 logins, get rid of the login message when the user is familiar with the flow ???  -->
<?php


if (isset($_POST['submitLogOut'])) {
//    $time_logout = time();
//    $time_logout = date('Y-m-d H:i:s', $time_logout);

    $ip = new Get_IP_Address();
    $ip_address = $ip->getRealIpAddr();
    $stmt = $pdo->prepare(" INSERT INTO transaction_store (id_user, ip_address, logout) VALUES (?, ?, ?) ");
    $stmt->execute([$uid_hbdi, $ip_address, 1]);
// TODO: logout should not clear current content. Login does not. Why?

// ### message ###
    $msg = "Logout successful. <br> Redirecting to HBDI Home...";
    echo "<script> showMessage('$msg'); </script>";

// ### redirect & Exit ###
//<!-- ########### clear sessions ############ -->
    session_destroy();
    echo "<meta http-equiv=REFRESH CONTENT=1;url=$p/index.php>";
    exit;
}
?>
<!-- ##### end of log out logout processing ##### -->


<!--  ##### beginning Reset Password Modal ##### -->
<div class="modal fade" id="resetPwModal" role="dialog">
    <div class="modal-dialog" role="document">
        <!-- Modal content-->
        <div class="modal-content">
            <form enctype="multipart/form-data" method="POST"
                  onsubmit="return validate();">
                <div class="modal-header">
                    <h4 class="modal-title"> Reset Password </h4>
                    <span>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </span>
                </div>
                <div class="modal-body">
                    <div>
                        <input type="text" name="username"
                               placeholder="Username"
                               class="form-control">
                        <div><span id="username_error"></span></div>
                    </div>
                    <div style="height: 20px; color: #818181;
                     padding-bottom: 1px; position: relative; left: 47%; font-size: 12px; width: 10%;">
                        OR
                    </div>

                    <input type="text" name="email" placeholder="Email address" class="form-control"
                           style="margin-top: 0">
                    <div><span id="email_error"></span></div>

                    <br>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="submitResetPw" id="submit"
                            class="btn"
                            value=""> Reset
                    </button>

                    <button class="btn" style="background-color:#915664;" data-toggle="modal" data-target="#loginModal" data-dismiss="modal"> log in
                    </button>

                    <div><br></div>
                    <div style="display: block">
                        <div></div>
                        Don't have an account? &nbsp;<a style="color: #915664; font-weight: 500" data-toggle="modal" data-target="#signupModal"
                                                        data-dismiss="modal"> Sign Up </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end of passwordReset modal content       -->
</div>
<!-- ##### End of Reset Password Reset Modal ##### -->
<!-- ##### process reset password reset process ##### -->
<?php
//$email = "";
if (isset($_POST['submitResetPw'])) {
    // verify email
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $email = $_POST['email'];
    if ((!isset($email)) or (empty($email))) {
        echo "<div class='php-message'> Please input your email address... </div>";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=pw_reset.php>';
        exit();
    } else {
        $email = test_input($email);
    }

//    check DB
    $stmt = $pdo->prepare("SELECT email, username FROM user WHERE email = '$email' ");
    $stmt->execute();
    $result = $stmt->fetch();
    $email_db = $result['email'];
    $username_db = $result['username'];
    if ($email == $email_db) {

//        generate a toekn
        $token = substr("abcdefghijklmnopqrstuvwxyz", mt_rand(0, 25), 1) . substr(md5(time()), 1);
        $pass_hash = password_hash("$token", PASSWORD_DEFAULT);
/// save token to mysql (UPDATE to replace passwd)
        $sql = " UPDATE user SET account_verify_token = '$pass_hash' WHERE email = '$email_db' ";
        $stmt = $pdo->prepare($sql);
        $true_false = $stmt->execute();
        if ($true_false == TRUE) {
            echo "<div id='php-message'> Password reset email sent... </div> ";
        }

        /// send email with token link
/// http://talkerscode.com/webtricks/password-reset-system-using-php.php
// the headers: https://stackoverflow.com/questions/28026932/php-warning-mail-sendmail-from-not-set-in-php-ini-or-custom-from-head
        $link = "<a href='$p/user/pw_reset_process.php?key=" . $email_db . "&reset=" . $pass_hash . "'> Click to reset password</a>";
        try {
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'From: admin@hbdi<admin@hbdi.fsu.edu>' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// the message
            $msg = "
                DO NOT reply to this email. Contact the website administrator for support or questions. <br><br>
                Please click on the link to reset your password: $link. <br><br>
                
                If the link is not working for you, please copy and paste the URL below
                and paste to the address bar of your browser and hit enter to reset your password:<br>
                   $p/user/pw_reset_process.php?key=$email_db&reset=$pass_hash
                    ";

// use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($msg, 70);
// send email
            mail("$email_db", "HBDI: Reset Password", "$msg", "$headers");
// message user
            $msg = "
            <div id='php-message'> Hi, $username_db, <br>
                Reset email sent by admin@hbdi (admin@hbdi.fsu.edu) to $email_db. <br>
                Check your Spam folder if you don't see the email.</div> <br>";

            echo "<meta http-equiv=REFRESH CONTENT=5;url=$p/index.php>";
        } catch (Exception $exception) {
            echo $exception;
        }
    } else {
        echo "<div id='php-message'> Email address is not found. <br> Redirecting you to homepage... </div>";
        echo "<meta http-equiv=REFRESH CONTENT=5;url=$p/index.php>";
    }
}
?>
<!-- ##### end of password reset process ##### -->


<!-- ##### beginning New Project Modal ##### -->
<div class="modal fade" id="newProjectModal" role="dialog">
    <div class="modal-dialog" role="document">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Create New Project </h4>
                <span>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </span>
            </div>
            <!-- create new project Modal Body -->
            <div class="modal-body">
                <form enctype="multipart/form-data" method="POST" action="">

                    <div class="form-group">
                        <!--                        <div class="modal-header">-->

                        <input placeholder="Project title... (128 characters maximum)"
                               type="text" name="title_project"
                               class="form-control" required>
                        <!--                        </div>/**/-->
                    </div>

                    <div class="form-group">
                        <input placeholder="Short title... (10 characters maximum)"
                               type="text"
                               name="title_project_short"
                               class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label style="margin: 15px 0 0 0; color: dimgrey">Granted By:</label><br>
                        <div style="padding-left: 15px; color: dimgrey">
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input" id="nih"
                                                             name="granted_by[]" value="NIH">
                                NIH
                            </div>
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input"
                                                             name="granted_by[]" value="HHS">
                                HHS
                            </div>
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input"
                                                             name="granted_by[]" value="NSF">
                                NSF
                            </div>
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input"
                                                             name="granted_by[]" value="FDA">
                                FDA
                            </div>
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input"
                                                             name="granted_by[]" value="FSU">
                                FSU
                            </div>
                            <div class="box-checkbox"><input type="checkbox" class="form-check-input"
                                                             name="granted_by[]" value="">
                                Other
                            </div>
                        </div>

                        <input placeholder="Grant number..." name="grant_number" class="input_field" style="display: none; margin-top: 0">
                    </div>

                    <div class="form-group">
                        <label style="color: darkgrey; margin: 15px 0 0 0; width: 50%"> Project begins on date </label>
                        <input type="date" name="date_begin" min="2015-01-01"
                               max="2050-12-31" class="input_field" style="margin: 0; color: dimgrey; ; width: 45%" required>
                    </div>

                    <div class="form-group">
                        <label style="color: darkgrey; margin: 3px 0 0 0; width: 50% "> Project ends on date: </label>
                        <input type="date" name="date_to_complete" min="2015-01-01"
                               max="2050-12-31" class="input_field" style="margin: 0 0 15px; color: dimgrey; width: 45%" required>
                    </div>

                    <input name="id_user" value="<?php echo $uid_hbdi; ?>" hidden>
                    <!--                    <input name="id_project" value="--><?php //echo $id_project; ?><!--" hidden>-->
                    <input name="token_id_project_creation" value="<?php echo $uid_hbdi . '_' . time(); ?>" hidden>
                    <input class="btn" type="submit" name="submitNewProject"
                           value="Create">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ##### end of create new project modal #####   -->



