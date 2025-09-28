<?php
//$this_page = basename(__FILE__);
//error_log("this-page @topnav is: $this_page", 0);
//if (($this_page != 'index.php') || ($this_page != 'account_verify.php')) {

?>

<!-- ##### PHP-MESsaGE JS ##### -->
<script>
    function showMessage(text) {
        document.getElementById("php-message").style.display = "block";
        document.getElementById("php-message").innerHTML = text;
        // "You are not logged in. <br> Redirecting to HBDI Home...";
    }
</script>
<div id="php-message"></div>

<?php
//$this_page = basename(__FILE__); // hey this does not work!!!!!!!!!!!!!! it gives login_loader.php when I am on index.php
$this_page = $_SERVER['PHP_SELF'];
error_log("this-page is: $this_page detected by @login_loader.php ", 0);

if (!isset($_SESSION['email_hbdi']) or
    !isset($_SESSION['username_hbdi']) or
    !isset($_SESSION['uid_hbdi'])) {

// ##### do not redirect if index.php or account_verify.php
    if (($this_page != '/hbdi/index.php') && ($this_page != '/hbdi/user/account_verify.php')) {
        echo '
        <script type="text/javascript"> showMessage("You are not logged in. <br> Redirecting to HBDI Home..."); </script>
        ';
        echo "<meta http-equiv=REFRESH CONTENT=1;url=$p>";
        exit;
    }
} else {
    $email_hbdi = $_SESSION['email_hbdi'];
    $username_hbdi = $_SESSION['username_hbdi'];
    $uid_hbdi = $_SESSION['uid_hbdi'];
}

// ##### auto logout after inactivity #####
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
    // last request was more than 15 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
    echo "<script> alert(' This session was disconnected after being idle for 15 minutes. '); 
let url= 'https://tychen.us/hbdi/'; 
    window.location = url;
</script>";
} else {
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
}
// ##### end of auto logout after inactivity #####

//    $_SESSION['login_redirect'] = $_SERVER['PHP_SELF'];


?>

<!---->
<!--<div id="theModal" class="modal fade" role="dialog">-->
<!--    <div class="modal-dialog">-->
<!---->
<!-- Modal content-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" class="close" data-dismiss="modal">&times;</button>-->
<!--                <h4 class="modal-title">Please log in or sign up</h4>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <p> You are not logged in. Please log in or sign up for a new account. </p>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->
