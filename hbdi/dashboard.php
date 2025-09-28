<!-- ##### JS for task/member/file actions ##### -->
<script defer src="https://tychen.us/hbdi/scripts/taskMenu.js"></script>
<script defer src="https://tychen.us/hbdi/scripts/memberMenu.js"></script>
<script defer src="https://tychen.us/hbdi/scripts/fileMenu.js"></script>
<!-- ##### end of JS for task/member/file actions ##### -->

<?php
include_once("./includes/topnav.php");
include_once("./scripts/utilities.php"); // #### facebook_time
include_once("./scripts/modals.php"); // #### modals

// TODO: why is this here?
$uid_hbdi = $_SESSION['uid_hbdi'];
   
?>

<!-- container -->
<div class="container-fluid" style="margin: 0 auto; border-">
    <div id="quickTour" style="display: none" class="alert alert-danger text-center"> Feature Coming Soon...</div>

    <div class="section-wrap" style="position: relative;">

        <!-- ### quick tour button ### -->
        <button class="btn btn-success" type="button"
                style="
                    position: absolute;
                    left: 25px;
                    width: 150px;
                    background-color: #CEB888;
                    border: 2px dashed #782f40;
                    border-radius: 2px;
                    font-weight: 700;
                    box-shadow: 2px 3px 15px black;
                    z-index: 5;
                    "
                onclick="quickTour()"
                title="Visual tour around the interface for new users; disappear after three logins if not clicked.">
            Quick Tour
        </button>
        <!-- ### end of quick tour button ### -->

        <!-- ### create new project button ### -->
        <div style="position: absolute; right: 20px;">
            <button style="padding: 0 6px; border-radius: 8px; border: 2px solid #782f40; background-color: #915664; ">
                <a data-toggle='modal' data-target='#newProjectModal'
                   style="text-decoration-line: none; color: #FFFFFF; height: 20px; "> Create New Project </a>
            </button>
        </div>
        <!--   Dashboard Title  -->
        <div class="page-title" style="">
            HBDI Dashboard
        </div>
    </div>
    <!-- end of section wrap dashboard header: New project, title & search-->


    <!-- ##### Content Display Section ##### -->
    <div class="section-wrap">
        <div class="row">
            <!-- Left Column  -->
            <!-- ### list of Projects ### -->
            <div class="col-5">

                <!-- Projects Pane -->
                <div class="section-pane" style="width: 100%">
                    <!-- pane header: Projects -->
                    <div class="pane-header">
                        <div class="title" style="display: inline-block"> Projects</div>
                        <!--                        <span class="block-tail"> </span>-->
                        <div data-toggle="tooltip" data-placement="top" title="Create a new project"
                             style="display: inline">
                            <i class="fas fa-plus-circle " data-toggle='modal' data-target='#newProjectModal'
                               style="color: grey; font-size: 1em;"> </i>
                        </div>
                        <div style="display: none; margin-left: 5px; color: dimgrey"
                             id="projectMenu" onclick="">
                            <a href="" style="color: #782f40"> Archive </a> | <a href="" style="color: #782f40">
                                Replicate </a> | <a href="" style="color: #782f40"> Delete </a>
                        </div>
                    </div>

                    <!-- pane content: List Existing Projects -->
                    <div class="pane-content">
                        <div class="content-header" style="width: 45%; padding-left: 23px" data-toggle="tooltip"
                             data-placement="top"
                             title="Sort by project name"> Project
                        </div>
                        <div class="content-header" style="width: 30%;" data-toggle="tooltip" data-placement="top"
                             title="Sort by days due">
                            Due in Days
                        </div>

                        <div class="content-header" data-toggle="tooltip" data-placement="top"
                             title="Sort by project role"> Role
                        </div>
                        <?php

                        // SELECT pu.id_user, pu.id_project, pu.role
                        // FROM project_user AS pu
                        // INNER JOIN
                        // projects AS prj
                        // ON pu.id_project = prj.id_project WHERE pu.id_user = '$uid_hbdi' ORDER BY prj.date_to_complete
                        $result = $pdo->query(" 
SELECT DISTINCT id_project, role 
FROM project_user 
WHERE id_user = '$uid_hbdi' ")->fetchAll();
                        foreach ($result as $row) {
                            $id_project = $row['id_project'];
                            $role = $row['role'];

                            $result2 = $pdo->query("SELECT id_project, id_creator, title_project, title_project_short, date_to_complete FROM projects WHERE id_project = '$id_project' ORDER BY date_to_complete ASC")->fetchAll();
                            foreach ($result2 as $row2) {
                                $id_creator = $row2['id_creator'];
                                $title_project = $row2['title_project'];
                                $title_project_short = $row2['title_project_short'];
                                $date_to_complete = $row2['date_to_complete'];

                                $date_due_project = date('Y-m-d', $date_to_complete);

                                $days_to_complete = floor((time() - strtotime($date_due_project)) / 60 / 20 / 24);

                                $username_hbdi = $pdo->query("SELECT username FROM user WHERE id_user = '$id_creator' ")->fetch();
                                $username_hbdi = $username_hbdi['username'];
                                ?>
                                <div class='content-item-wrap' style="font-weight: 600">
                                    <div class='content-item'>
                                        <input class='content-header' style='margin: 2px 2px 0 0 ; width: 15px'
                                               type='checkbox' name='projectCheck' id='$id_file' value='$id_file'
                                               onclick='loadProjectMenu()'>
                                        <!--                                        <input class='content-header'-->
                                        <!--                                               style='margin: 4px 2px 0 0 ; width: 15px'-->
                                        <!--                                               type='checkbox'-->
                                        <!--                                               name='projectCheck'-->
                                        <!--                                               id='-->
                                        <?php //echo $id_file; ?><!--'-->
                                        <!--                                               value='-->
                                        <?php //echo $id_file ?><!--'-->
                                        <!--                                               onclick='loadProjectMenu()'>-->
                                    </div>
                                    <a style='text-decoration: none; color: #782F40'
                                       href='<?php echo $p; ?>/projects/<?php echo $username_hbdi; ?>/<?php echo $title_project_short; ?>.php'>
                                        <!--                                    <div class='content-item' style='width: 30%'>-->
                                        <div class="content-item" style='width: 40%; color: #782F40; font-weight: 700'
                                             data-toggle="tooltip"
                                             title="<?php echo 'title: ' . $title_project . ' (ID: ' . $id_project . ')'; ?>">
                                            <?php echo $title_project_short; ?>
                                        </div>

                                        <div class='content-item' style='width: 25%' data-toggle="tooltip"
                                             title="Due day: <?php echo $date_due_project; ?>">
                                            <?php echo $days_to_complete; ?>
                                        </div>
                                        <span class='content-item'><?php echo $role; ?></span> </a>
                                </div>
                                <?php
                            }
                        }
                        unset($id_project);
                        ?>
                    </div>
                </div>
                <!-- ### end of Project List Pane ### -->


                <!-- ### begin tasks section pane ### -->
                <div class="section-pane" style=" width: ; min-height: 100px; margin-top: 15px ">

                    <form method="POST">
                        <div class="pane-header">
                            <div class="title">
                                All Tasks
                                <div style="display: inline ; background-color: transparent; border: none; color: lightgrey"
                                     data-toggle="modal"
                                     data-target="#taskAddModal"
                                     data-directory="<?php echo basename(__FILE__, '.php'); ?>">
                                    <i class=" fas fa-plus-circle"></i>

                                </div>
                            </div>
                            <div style="display: none; margin-left: 5px; color: dimgrey"
                                 id="taskMenu">
                                <button name="submitTaskAcknowledge" value="submitTaskAcknowledge"
                                        id="submitTaskAcknowledge"
                                        style="color: #782f40; background-color: transparent; display: inline; padding: 0">
                                    Ack
                                </button>
                                |
                                <button name="submitTaskWorking" value="submitTaskWorking" id="submitTaskWorking"
                                        style="color: #782f40; background-color: transparent; display: inline; padding: 0">
                                    WOI
                                </button>
                                |
                                <button name="submitTaskComplete" value="submitTaskComplete" id="submitTaskComplete"
                                        style="color: #782f40; background-color: transparent; display: inline; padding: 0">
                                    Done
                                </button>
                                |
                                <button name="submit"
                                        style="color: #782f40; background-color: transparent; display: inline; padding: 0"
                                        id="taskAnnotate"> Annotate
                                </button>
                            </div>
                        </div>
                        <div id="taskList">
                            <div class="pane-content">
                                <div>
                                    <div class='content-header' style='width: 17px'> &nbsp;</div>
                                    <div class='content-header' style='width: 35%;' data-toggle="tooltip"
                                         data-placement="top"
                                         title="Sort by task">
                                        Task
                                    </div>
                                    <div class='content-header' style='width: 20%;' data-toggle="tooltip"
                                         data-placement="top"
                                         title="Sort by owner">
                                        Owner
                                    </div>
                                    <div class='content-header' style='width: 15%;' data-toggle="tooltip"
                                         data-placement="top"
                                         title="Sort by due day">
                                        Due
                                    </div>
                                    <div class='content-header' style='width: ;' data-toggle="tooltip"
                                         data-placement="top"
                                         title="Sort by status">
                                        Status
                                    </div>
                                </div>

                                <?php

                                $stmt = $pdo->query(" 
 SELECT DISTINCT id_task, title_task, assigned_to, date_due, priority, status, id_project  
 FROM task 
 WHERE (  assigned_to = '$uid_hbdi' OR created_by = '$uid_hbdi')
 ORDER BY date_due ASC;
 ");

                                while ($row = $stmt->fetch()) {
//                                    $id_project = $row['id_project'];
//                                    $projects = $pdo->query(" SELECT id_project FROM project_user WHERE id_user = $uid_hbdi")->fetchAll();
//                                    foreach ($projects as $id_project) {
//                                        $id_project = $id_project['id_project'];
//
//
//                                        $stmt4 = $pdo->query(" SELECT title_project_short FROM projects WHERE id_project = '$id_project' ");
//                                        $result4 = $stmt4->fetch();
//                                        $title_project_short = $result4['title_project_short'];

                                    $assigned = $row['assigned_to'];
                                    $date_due = $row['date_due'];
                                    $status = $row['status'];
                                    if ($status == 'ACK') {
                                        $status_tooltip = 'Task owner has acknowledged receiving the task.';
                                    } elseif ($status == 'WOI') {
                                        $status_tooltip = 'Task owner is working on it.';
                                    } elseif ($status == 'DONE') {
                                        $status_tooltip = 'Task owner has completed the task.';
                                    } elseif ($status == 'VFY') {
                                        $status_tooltip = 'Task originator has verified task completion by owner.';
                                    } elseif ($status == 'ARC') {
                                        $status_tooltip = 'The task is archived.';
                                    }
//                                else {$status_tooltip = null;}

                                    $priority = $row['priority'];
                                    $id_task = $row['id_task'];
                                    $id_project = $row['id_project'];
                                    $now = time();
                                    $diff = abs($date_due - $now);
                                    $days = floor($diff / (60 * 60 * 24));
                                    if ($days <= 3) {
                                        $days = "<span style='color: red'> $days </span>";
                                    }

                                    $stmt2 = $pdo->query(" SELECT name_first FROM user WHERE id_user = '$assigned' ");
                                    foreach ($stmt2 as $row2) {
                                        $name = $row2['name_first'];
                                        $title_task = $row['title_task'];
                                        ?>
                                        <div class='content-item-wrap'>
                                            <input name="id_project" type="text" value="<?php echo $id_project; ?>"
                                                   hidden> <input
                                                    class='content-header'
                                                    style='margin: 6px 2px 0 0; ; width: 15px; '
                                                    type='checkbox'
                                                    name='taskCheck[]'
                                                    id='<?php echo $id_task; ?>'
                                                    value='<?php echo $id_task; ?>'
                                                    onclick='loadTaskMenu()'>
                                            <div class='content-item' style='width: 35%;' data-toggle='tooltip'
                                                <?php $title_project_short = ($title_project_short) ? $title_project_short : null ?>
                                                 title=' <?php echo "Project: $title_project_short; Task ID: $id_task;" ?>'> <?php echo $title_task; ?>
                                            </div>
                                            <div class='content-item'
                                                 style='width: 20%; border: '> <?php echo $name; ?> </div>
                                            <div class='content-item' style='width: 15%; '> <?php echo $days; ?> d</div>
                                            <div class='content-item' style='width: ; ' data-toggle='tooltip'
                                                 title='<?php echo $status_tooltip; ?>'> <?php echo $status; ?></div>
                                        </div>
                                        <?php
                                    }
//                                    }
                                }
                                $previous_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                ?>
                            </div>
                            <!-- ### end of pane content: list TASKs ### -->
                            <input name="previous_url" value="<?php echo $previous_url; ?>" hidden>
                        </div>
                    </form>
                    <?php unset($id_project); ?>
                </div>
                <!-- ### end of Task list section PANE ### -->
            </div>
            <!-- ### End of Left  Column ### -->


            <!-- ##### Right Column (Files) ##### -->
            <div class="col-7">

                <!--Files Pane-->
                <div class="section-pane" style="width: 100%">
                    <div class="pane-header">
                        <ul class="nav nav-tabs " id="tabContent" style="display: inline-block;">
                            <div style="display: inline-block" data-toggle="tooltip" data-placement="top"
                                 title="Listing all files">
                                <li class="active title" style="padding-top: 2px"><a href="#" data-toggle="tab"> All
                                                                                                                 Files </a>
                                </li>
                                |
                            </div>
                            <div style="display: inline-block" data-toggle="tooltip" data-placement="top"
                                 title="Structured, semi-structured, or unstructured datasets">
                                <li class="title"
                                    style="padding-top: 2px; color: #915664; font-weight: 400; background-color: transparent">
                                    <a
                                            href="#" data-toggle="tab"> Datasets </a></li>
                                |
                            </div>
                            <div style="display: inline-block" data-toggle="tooltip" data-placement="top"
                                 title="Drafts, manuscripts, preprints...">
                                <li class="title" style="padding-top: 2px; color: #915664; font-weight: 400">
                                    <a href="#" data-toggle="tab"> Documents </a>
                                </li>
                            </div>
                            <div style="display: inline" data-toggle="tooltip" data-placement="bottom"
                                 title="Add a new file category">
                                <i class="fas fa-plus-circle "
                                   style="color: lightgrey; font-size: 1em"> </i>
                            </div>

                            <div style="display: inline; color: grey; font-size: 1em;"
                                 data-toggle="tooltip" data-placement="top" title="Upload a new file">
                                <i data-toggle="modal" data-target="#fileModalUploadXXXXX" style="color: lightgrey"
                                   class="fas fa-cloud-upload-alt"> </i>
                            </div>
                        </ul>


                        <!-- ##### search Box ##### -->
                        <div style="display: inline-block; float: right; box-shadow: 2px 2px 2px lightgrey;">
                            <form action="" style="
                            /*border-bottom-style: hidden;*/
                            /*border-right-style: hidden;*/
                            /*border-top-style: hidden;*/
                            height: ;
                            float: right;
                            margin: 0 0 0 1px">
                                <input type="text" placeholder=" Search/filter files..."
                                       onkeyup="showResultXXXXX(this.value)" ;
                                       style="
                                                border: 1px solid #8a6d3b;
                                                height: ;
                                                border-radius: 2px;
                                                display: inline;
                                /*margin-bottom: 3px;*/
                                /*margin: 2px 0 2px 0!important;*/
                                padding: 2px 0 0 3px;
                                /*float: right;*/
                                /*border-bottom-left-radius: 3px;*/
                                /*border-top-left-radius: 3px; */
                                ">
                                <button type="submit"
                                        style="
                                /*position: relative;*/
                                /*height: 27px;*/
                                float: right;
                                /*padding: 0;*/
                                background-color: white;
                                width: 25px;
                                margin: 2px 0 2px 0!important;
                                /*border-bottom-right-radius: 3px;*/
                                /*border-top-right-radius: 3px*/
">
                                    <i class="fa fa-search fa-sm" style="color: #782f40"></i>
                                </button>
                                <!--                        <div style="background-color: #782f40" id="livesearch"></div>-->
                            </form>
                        </div>

                        <!-- ### actions ### -->
                        <span style="display: none; color: dimgrey; margin-left: 5px; text-decoration: none;"
                              id="fileMenu">
                        <a href="#">Download</a> | <a href="#">Load (Scratch Drive)</a>  | <a href="#"> Move </a> | <a
                                    href="#"> Label (Metadata)</a> | <a
                                    href="#"> Delete </a>
                    </span>
                    </div>
                    <!-- ### end of pane header ### -->
                    <div class='pane-content'>
                        <?php
                        echo "
                        <div class='content-header' style='width: 5%;'> FID </div >  
                        <div class='content-header' style='width: 50%;'> Filename </div> 
                        <div class='content-header' style='width: 20%;'> Compliance </div> 
                        <div class='content-header' style='width: '> Uploaded </div> 
                        ";

                        // ##### get Projects where (uid_hbdi == id_user) DISTINCT from project_user
                        $projects = $pdo->query(" 
 SELECT DISTINCT id_project FROM project_user WHERE id_user = $uid_hbdi ")->fetchAll();
                        //                        $stmt->execute([$uid_hbdi]);
                        //                        $projects =$stmt->fetchAll();
                        foreach ($projects as $project_id) {
                            $project_id = $project_id['id_project'];
                            $result = $pdo->query(" SELECT id_project, id_creator, title_project, title_project_short FROM projects  WHERE id_project = '$project_id' ")->fetch();

                            // ##### for each project, get the CREATOR ID (for path)
                            $id_project = $result['id_project'];
                            $id_creator = $result['id_creator'];
                            $title_project = $result['title_project'];
                            $title_project_short = $result['title_project_short'];
                            $project_creator = $pdo->query("SELECT username FROM user WHERE id_user = '$id_creator' ")->fetch();
                            $username_project = $project_creator['username'];
                            echo "<div class='content-title' style='width: calc(100% - 75px)'><a href='$p/projects/$username_project/$title_project_short.php'>$title_project_short: $title_project </a></div>";

                            // ##### get files for each project
                            $result = $pdo->query(" 
 SELECT id_file, name_file, date_uploaded, id_project, compliance, time_stamp FROM files 
 WHERE id_project = '$project_id' ORDER BY time_stamp DESC");
                            $i = 0;
                            foreach ($result as $row2) {
                                $id_file = $row2['id_file'];
                                $filename = $row2['name_file'];
                                $date_uploaded = $row2['date_uploaded'];
                                $date_uploaded = date('Y-m-d H:i:s', $date_uploaded);
                                $days_ago = facebook_time_ago($date_uploaded);
                                $id_project = $row2['id_project'];
                                $time_stamp = $row2['time_stamp'];
                                $date_uploaded_tooltip = ($date_uploaded) ? $date_uploaded : $time_stamp;
                                if ($id_file) {
                                    $compliance = "";
                                    $stmt3 = $pdo->query("SELECT permission FROM permission_store WHERE id_file = '$id_file'");
                                    while ($row3 = $stmt3->fetch()) {
                                        $compliance .= $row3['permission'] . ' ';
//                                $compliance = $row2['compliance'];
                                    }
                                    echo "
                                    <div class='content-item-wrap'>
                                        <div class='content-item' style='width: 5%;'> $id_file </div>
                                        <div class='content-item' style='width: 50%;'> $filename </div> 
                                        <div class='content-item' style='width: 20%;'> $compliance </div> 
                                        <div class='content-item' style='width: ;' data-toggle='tooltip' title='$date_uploaded_tooltip'> $days_ago</div>
                                    </div>
                                        ";
                                }

                                $i++;
                                if ($i == 7) {
                                    echo "<div style='color: #BBBBBB; height: 22px; '> &nbsp; &nbsp; &nbsp;.........</div>";
                                    break;
                                }
                            }
                            if ($i < 4) {
                                echo "<br>";
                            }

                        }
                        echo "</div>";
                        //                End of Pane Content: Files & Datasets
                        ?>
                    </div>
                    <!--end of Files content Pane-->
                </div> <!--end of Content Display Section -->
            </div>
            <!-- End of Right Column -->
        </div>
        <!--        End of row -->
    </div>
    <!-- end of Section Wrap -->
</div>
<!-- ##### end of Container ##### -->


<?php
//echo "id_project before unset: $id_project";
unset($id_project);
if (isset($id_project)) {
    echo "id_project is still here.";
} else {
//    echo "id_project var is gone.";
}
?>

<?php include_once("./includes/footer.php"); ?>


<!-- ##### begin create New Project modal processing PHP ##### -->
<?php
if (isset($_POST['submitNewProject'])) {

    $title_project = $_POST['title_project'];
    $title_project_short = $_POST['title_project_short'];

    $result = $pdo->query(" SELECT id_project FROM projects WHERE title_project_short = '$title_project_short' ")->fetchAll();
    foreach ($result as $id) {
        if (isset($id['id_project'])) {
            $msg = "This project short title exists already. <br> Please choose a different short title.<br> Redirect you to Dashboard in 5 seconds... ";
            echo "<script> showMessage(' $msg '); </script>";
            echo "<meta http-equiv=REFRESH content=5;url=$p/dashboard.php>";
            exit;
        }
    }


//    TODO: check to make sure tps does not exist
    $id_user = $uid_hbdi;
    $token_id_project_creation = $_POST['token_id_project_creation'];

//    $time_created = date('Y-m-d H:i:s', time());
    $time_created = time();
//    $date_begin = date('Y-m-d H:i:s', strtotime($_POST['date_begin']));
    $date_begin = strtotime($_POST['date_begin']);
//    $date_begin = strtotime($date_begin);
//    $date_to_complete = date('Y-m-d H:i:s', strtotime($_POST['date_to_complete']));
    $date_to_complete = strtotime($_POST['date_to_complete']);
//    $date_to_complete = strtotime($date_to_complete);

//    TODO: roll back if later steps fail
// 1. ### create project in DB and
    //  INSERT project info to DB.project

//         TODO: PDO parameterrized
    $sql = " INSERT INTO projects (id_creator, title_project, title_project_short, time_created, date_begin, date_to_complete, token_id_project_creation ) 
                    VALUES ($uid_hbdi, '$title_project', '$title_project_short', '$time_created', '$date_begin', '$date_to_complete', '$token_id_project_creation') ";
    $pdo->exec($sql);
//        TODO: showMessage + redirect


// 2. ###   insert granter/compliance info into permission store
    $stmt = $pdo->query("SELECT id_project FROM projects WHERE token_id_project_creation = '$token_id_project_creation' ");
    $id_project = $stmt->fetch();

    if (isset($_POST['granted_by'])) {
        $granted_by = $_POST['granted_by'];
        foreach ($granted_by as $granter) {
            $stmt = $pdo->prepare(" 
INSERT INTO permission_store (permission, id_project, id_user) 
VALUES ('$granter', '$id_project', '$id_user') ");
        }
        $stmt->execute();
    }
//    $grant_number = $_POST['grant_number'];

// ### NO need to; Create Project ID directory instead: Create User directory, Project_files directory, and Project.php view file, & test.txt/
// 3. ### create project_id_directory
    // 1/4 create User Directory ====> Project Directory instead.
//    $user_dir = $_SERVER['DOCUMENT_ROOT'] . "/hbdi/projects/$username_hbdi";
//    TODO: user dir should be created in users directory... if needed???

//    get id_project
    $result = $pdo->query(" SELECT id_project, title_project_short FROM projects WHERE token_id_project_creation = '$token_id_project_creation' ")->fetch();
    $id_project = $result['id_project'];
    $title_project_short = $result['title_project_short'];

    // 3. ### if you create it, you are the lead, until you change it.
    try {
        $stmt = " INSERT INTO project_user (id_user, id_project, role) VALUES ('$uid_hbdi', '$id_project', 'lead') ";
        $pdo->exec($stmt);
    } catch (PDOException $e) {
        echo $e->getMessage() . "OOPS! SQL failed.<br>";
    }

// ### create project_files directory
    $dir_project_files = $_SERVER['DOCUMENT_ROOT'] . "/hbdi/projects/$username_hbdi/$title_project_short" . '_files';
    if (file_exists($dir_project_files)) {
        $msg = " Project file directory exists. Good. <br>";
        echo "<script> showMessage(' $msg ')";
    } else {
        // ############## NOOOOOO quotes around $dir ==> actually works :-( !!!!!!!!!!!!!!!!!!!!!
        mkdir("$dir_project_files", 0755, true) or die ("Cannot creat directory $dir_project_files. Please contact the system administrator if the problem persist.");
        if (file_exists($dir_project_files)) {
            $msg = "File directory successfully created.";
        } else {
            $msg = "Oops! Something went wrong when we try to create your file directory.";
            error_log("$msg", 0);
        }
        echo "<script> showMessage(' $msg ') </script>";
    }


//    $dir_project_files = $dir_project . '_files';
//    if (!file_exists($dir_project_files)) {
//        mkdir("$prj_dir", 0755, true) or die ("Project directory not created."); // 4 digits required
//        if (!(file_exists($prj_dir))) {
////                $msg = "Project_files directory $prj_dir created! Good.";
////                error_log("Project_files directory $prj_dir created! Good.", 0);
////                3/4
////                $test_file = $prj_dir . '/' . 'test.txt';
////                touch($test_file);
////                $test_f = fopen($test_file, 'w') or die("Test.txt not created.");
////                if ($test_f) {
////                    $msg = "Test file created.<br>";
////                    chmod($test_file, 0644); // need 4 digits to work
////                }
////                unlink($test_file);
////                $projects_dir = $_SERVER['DOCUMENT_ROOT'] . "hbdi/projects";
////                $test_json = "$projects_dir/test.json";
////                $dir_json = "$prj_dir/test.json";
////                copy("$test_json", "$dir_json");
////            } else {
//            $msg = "Something went wrong when creating your project file directory. <br>
//Redirecting you to the Dashboard.";
//            echo "<script> showMessage(' $msg ')</script>";
//            echo "<meta http-equiv=REFRESH content=5;url=$p/dashboard.php>";
//            exit();
//        }
//    }


//  ### Project PHP viewer file to display project. "<br>";
    $project_index = $_SERVER['DOCUMENT_ROOT'] . "hbdi/projects/$username_hbdi/$title_project_short" . '.php';
    error_log("the project_index is $project_index", 0);

    if (file_exists($project_index)) {
        $msg = "Project short title is taken. Select a different short title for the project. Redirecting...";
        echo "<script> showMessage(' $msg ') </script>";
        echo "<meta http-equiv=REFRESH content=5;url=$p/dashboard.php>";
    }

// ### create php viewer, chmod, and write text to file
    $project_index_creation = fopen("$project_index", 'w') or die("Unable to write $project_index");
    chmod("$project_index", 0644); // files are 644; folders are 755
    if (!$project_index) {
        $msg = "Project index file ($project_index) is not created. Something is wrong. Contact the Support Team if the issue persists.";
        echo "<script> showMessage(' $msg ') </script>";
        echo "<meta http-equiv=REFRESH content=5;url=$p/dashboard.php>";
        exit();
    }

    // ### throw headers into the PHP file
    $txt = <<<EOF
<?php 
include('../../includes/topnav.php');
include('../../project/project_view.php');
?>
EOF;

    fwrite($project_index_creation, $txt);
    fclose($project_index_creation);

    error_log("Created Project file project.php", 0);


// Project Creation a Success; redirecting.
    $msg = "HBDI project $title_project is successfully created. <br> Redirecting you to the Project Home in 5 seconds... ";
    echo "<script> showMessage(' $msg ') </script>";
    echo "<meta http-equiv=REFRESH content=5;url=$p/projects/$username_hbdi/$title_project_short.php>";
    exit();
}
?>
<!-- ##### end of New Project Processing PHP ##### -->


<script>
    function quickTour() {
        {
            let x = document.getElementById('quickTour');
            if (x.style.display === 'none') {
                x.style.display = 'block';
                setTimeout(function () {
                    x.style.display = 'none';
                }, 2000);
            }
        }
    }
</script>