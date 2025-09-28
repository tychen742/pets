<!-- ##### tooltip initialization ##### -->
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<!-- ##### end of tooltip initialization ##### -->


<!-- ##### includes INCLUDES ##### -->
<?php
include_once('headers.php');
include_once("/var/www/tychen.us/hbdi/scripts/utilities.php");

if (isset($_SESSION['uid_hbdi'])) {
    $uid_hbdi = $_SESSION['uid_hbdi'];
}

//}
// ##### show PHP error messages #####
// ##### commented out temporarily
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!-- ##### Begin of Navigation Bar ##### -->
<!-- ##### stripes on top of page ##### -->
<div
        style="height: 10px; background: repeating-linear-gradient(
    to right,
            #CEB888,
            #CEB888 9px,
            #782F40 10px,
            #63615d 15px,
            #FFFFFF 9px);"
        class="module">
    <div class="stripe-6">
    </div>
</div>
<!-- ##### end of stripes on top of page ##### -->

<?php
//$this_page = $_SERVER['PHP_SELF'];

##### not signed in #####
if (!isset($_SESSION['email_hbdi'])) {
    ?>

    <!--        ##### topnav wrapper #####-->
    <div class="topnav_wrapper">
        <!-- ##### the Navigation Bar navbar ##### -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-light navbar_customize">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent"
                 style="display: inline-block;">

                <ul id="navbar-nav" class="navbar-nav mr-auto">

                    <!-- ##### the social media icons, the Brand, and the menu items ##### -->
                    <!--                    <div-->
                    <!--                            style="-->
                    <!--                        /*float: left;*/-->
                    <!--                        /*display: inline-block;*/-->

                    <!--                        /*border: 2px solid pink*/-->
                    <!--">-->
                    <li class="nav-item " style="padding-left: 15px;">
                        <div style="color: white; text-align: left; font-size: 20px; ">
                            <a><i class="fab fa-facebook"></i></a> &nbsp;
                            <a><i class="fab fa-linkedin"></i></a> &nbsp;
                            <a><i class="fab fa-twitter"></i></a>
                        </div>
                    </li>
                    <!--                    </div>-->
                    &nbsp;
                    <!-- ##### end of the social media icons, the Brand, and the menu items ##### -->


                    <li class="nav-item">
                        <a class="nav-link" style="color:#FFF;  font-size: 16px; font-weight: 600"> Home </a>
                    </li>
                    &nbsp;
                    <div class="nav-item"> <!-- why float right???-->
                        <a class="nav-link dropdown-toggle"
                           data-toggle="dropdown"> Services </a>
                        <div class="dropdown-menu" style="position: absolute; top: 80px; left: 30%">
                            <a class="dropdown-item" href="#">Security </a> <a class="dropdown-item"
                                                                               href="#">Compliance </a> <a
                                    class="dropdown-item" href="#"> Citation </a> <a class="dropdown-item" href="#">
                                Preprint </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Manage </a> <a class="dropdown-item"
                                                                             href="#">Collaborate </a> <a
                                    class="dropdown-item" href="#">Share </a> <a class="dropdown-item"
                                                                                 href="#">Publish </a>
                        </div>
                    </div>
                    &nbsp;
                    &nbsp;
                    <div class="navbar-brand">
                        <a id="navbar-brand" href="<?php echo $p; ?>"> NOLE </a>
                    </div>
                    &nbsp;
                    <div class=" nav-item" data-toggle='modal' data-target='#signupModal'>
                        Sign Up
                    </div>
                    &nbsp;
                    <div class="nav-item" data-toggle='modal' data-target="#loginModal">
                        Log In
                    </div>
                    &nbsp;
                    <div class="nav-item">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown"> <span
                                    class="fas fa-user-circle"> </span> </a>
                        <div class="dropdown-menu" style="position: absolute; top: 80px; left: 70%">
                            <!--                            <a class="dropdown-item" href="" data-toggle='modal' data-target='#loginModal'> Log in </a>-->
                            <!--                            <a class="dropdown-item" href="" data-toggle='modal' data-target="#signupModal">Sign up</a>-->
                            <a class="dropdown-item" href=""
                               data-toggle='modal'
                               data-target='#resetPwModal'> Reset password </a>
                        </div>
                    </div>

                    &nbsp;

<!--                    <li class="nav-item"-->
<!--                        style="float: right; padding-right: 15px ">-->
<!--                        <i class=" fas fa-search" style="font-size: 1.2em"></i>-->
<!--                    </li>-->
                </ul>
            </div>
        </nav>
        <!-- #### end of Nav class=navbar ##### -->
    </div>
    <!-- end of ##### inside wrapper ##### -->

    <!-- ##### PHP-MESSaGE ##### -->
    <div id="php-message" style="text-align: center; margin: 0 auto; top: 300px; right: 200px">
    </div>
    <!-- ##### PHP-message ##### -->


    <?php
    ##### show normal navbar if logged in-->
    ##### End of Not Signed In
} else {
    ?>
    <!-- ##### wrapper ##### -->
    <div class="topnav_wrapper" style="margin: 0 auto!important">
        <!-- ##### navbar after logged in ##### -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-light navbar_customize"
             style="width: 100%; max-width: 1300px;">
            <!--        <nav class="navbar sticky-top navbar-expand-sm" style="width: 100%; max-width: 1300px;">-->

            <!-- ##### Logo and Brand ##### -->
            <!-- style in the line below (padding: 0; margin: 0!important;") will push the line up -->
            <div class="navbar-brand" style="padding: 2px 0 0 10px;">
                <div class="nav-item" style="margin-right: 0">
                    <img class="d-inline-block align-middle" style="display: inline-block; padding-bottom: 1px;"
                         src="./images/favicon_io/apple-touch-icon.png"
                         width="25" height="25" alt="HBDI logo">
                </div>
                <div style="display: inline-block; font-size: 1.25em">
                    <a href="<?php echo $p; ?>"> NOLE </a> <a href="<?php echo $p; ?>"> HBDI </a> <i
                            class="fas fa-ellipsis-v" style="color: #CEB888"></i> <a href="<?php echo $p; ?>"> FSU </a>
                </div>
            </div>

            <!-- ##### Navigation Menu to the right ##### -->
            <div class=" " id="navbarSupportedContent" style="margin-right: 0!important;
            padding-right:0!important; width: min-content!important;">
                <div class="navbar-nav">

                    <div class="nav-item">
                        <!-- style here does NOT works -->
                        <form action="" style="margin-top: 2px">
                            <input type="text" size="30" onkeyup="showResult(this.value)">

                            <div id="livesearch"></div>

                        </form>
                    </div>

                    <div class="nav-item dropdown">
                        <!--                            <a class="nav-link dropdown-toggle"-->
                        <!--                               href=""-->
                        <!--                               id="navbarDropdownMenuLink"-->
                        <!--                               role="button" data-toggle="dropdown" aria-haspopup="true"-->
                        <!--                               aria-expanded="false"> <i class="fas fa-user-circle"></i>-->
                        <!--                            </a>-->
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <div><a class="dropdown-item" href="" data-toggle='modal'
                                    data-target='#loginModal'> Log in </a></div>
                            <div><a class="dropdown-item" href="" data-toggle='modal'
                                    data-target="#signupModal">Sign up</a>
                            </div>
                            <div><a class="dropdown-item" href=""
                                    data-toggle='modal'
                                    data-target='#resetPwModal'> Reset password </a></div>
                        </div>
                    </div>
                    <!--                    </div>-->

                    <?php
                    //} else {
                    // already done in login_loader.php
                    //                        $email_hbdi = $_SESSION['email_hbdi'];
                    //                        $username_hbdi = $_SESSION['username_hbdi'];
                    //                                                $uid_hbdi = $_SESSION['uid_hbdi'];

                    ?>
                    <div class="nav-item nav-link" style="padding-left: 15px">
                        <a href="<?php echo $p; ?>/dashboard.php"> Dashboard </a>
                    </div>
                    <div class="nav-item dropdown" href="">
                        <a class="nav-link dropdown-toggle"
                           id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"> Projects </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            $result = $pdo->query("
SELECT DISTINCT id_project  
FROM project_user  
WHERE id_user = '$uid_hbdi' ")->fetchAll();
                            foreach ($result as $row) {
                                $id_project = $row['id_project'];

                                $result2 = $pdo->query("SELECT title_project_short FROM projects WHERE id_project = '$id_project' ORDER BY title_project_short ASC")->fetchAll();
                                foreach ($result2 as $row2) {
                                    $title_project_short = $row2['title_project_short'];

                                    $id_creator = $pdo->query(" SELECT id_creator FROM projects WHERE id_project = '$id_project'")->fetch();
                                    $id_creator = $id_creator['id_creator'];
                                    $username_hbdi_project = $pdo->query(" SELECT username FROM user WHERE id_user = '$id_creator' ")->fetch();
                                    $username_hbdi_project = $username_hbdi_project['username'];

//                                        if (file_exists("/var/www/tychen.us/hbdi/projects/$username_hbdi/$title_project_short.php")) {
//                                            ?>
                                    <a class="dropdown-item"
                                       href="<?php echo $p ?>/projects/<?php echo $username_hbdi_project . "/" . $title_project_short ?>.php">
                                        <?php echo $title_project_short; ?>
                                    </a>
                                    <?php
//                                        }
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="nav-item nav-link">
                        <a href="<?php echo $p ?>/files.php"> Files </a>
                    </div>
                    <!--        <a href="--><?php //echo $p ?><!--/documents.php"> Documents </a>-->

                    <div class="nav-item nav-link">
                        <a href="<?php echo $p ?>/tasks.php"> Tasks </a>
                    </div>

                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href=""
                           id="" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"> Resources </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" target='_blank'
                               href="">Your VM</a> <a class="dropdown-item" target='_blank'
                                                      href="">Virtual lab</a> <a class="dropdown-item"
                                                                                 target='_blank'
                                                                                 href="https://rcc.fsu.edu/submit-script-generator">RCC
                                                                                                                                    Slurm
                                                                                                                                    HPC</a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" target='_blank'
                               href="">HIPAA clearance</a> <a class="dropdown-item" target='_blank'
                                                              href="">IRB certification</a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" target="_blank"
                               href="https://dataverse.org/best-practices/academic-credit"> Data citation format </a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href=""
                           id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <?php
                            if (isset($email_hbdi) && isset($uid_hbdi)) {
                                $name_first = $pdo->query("SELECT name_first FROM user WHERE email = '$email_hbdi'")->fetch();
                                $name_first = $name_first['name_first'];
                                echo "$name_first";
                            }
                            ?>
                            <i class="fas fa-user-circle"></i>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!--                        TODO: profile page -->
                                <a class="dropdown-item" href="#"> Profile </a> <a class="dropdown-item" href=""
                                                                                   data-toggle='modal'
                                                                                   data-target='#resetPwModal'> Reset
                                                                                                                password</a>
                                <a class="dropdown-item" href="" data-toggle="modal"
                                   data-target="#logoutModal"> Logout </a>
                        </a>
                    </div>
                </div>
            </div>
            <?php
            //                    }
            //                    }
            ?>
    </div>
    <!--    end of ml-auto -->
    </nav>
    <!-- ##### End of Navigation Bar after logged in ##### -->
    </div>
    <!-- ##### end of wrapper ##### -->

    <!-- ##### PHP-MESSaGE ##### -->
    <div id="php-message" style="text-align: center; margin: 0 auto">
        <div class='loader'></div>
    </div>
    <!-- ##### ##### -->
    <?php
}
?>
<!-- ##### end of topnav PHP ##### -->


<!-- Search Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div style="position: relative; display: inline-block; margin: 0 auto">
                            <span style=" ">
                            <input style="margin: 50px 25px 0 50px; width: 500px; height: 45px; padding-left: 10px; "
                                   type="text" name="search"
                                   placeholder="Search for projects, datasets, and tasks...">
                                                    <span><i style="padding-left: 5px; "
                                                             class="fas fa-search"> </i></a></span>
                            </span>
            <div hidden>
                <button style="margin-top: 55px; font-weight: 500; color: #EEEEEE;
            padding: 7px 13px; border-radius: 10px; background-color: #782f40; width: 150px">
                    <a href="#"
                       style=""> SEARCH </a>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- end of Search Modal -->

<!-- ##### Temporary Search script ##### -->
<script>
    function showResult(str) {
        if (str.length == 0) {
            document.getElementById("livesearch").innerHTML = "";
            // document.getElementById("livesearch").style.display = "none";
            document.getElementById("livesearch").style.border = "0px";
            return;
        }
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {  // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("livesearch").innerHTML = this.responseText;
                document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET", "livesearch.php?q=" + str, true);
        xmlhttp.send();
    }
</script>
<!-- ##### end of Temporary Search Script #####-->


<!-- TODO: add a cookie here and after 3 logins, get rid of the login message when the user is familiar with the flow ???  -->
<!-- ### end of message ### -->


<?php
unset($id_project);
include_once("/var/www/tychen.us/hbdi/scripts/modals.php");
?>