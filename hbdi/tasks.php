<?php
include_once('includes/topnav.php');
include_once("./scripts/modals.php");

?>
<!-- ##### Task AJAX ##### -->
<script defer src="./scripts/taskMenu.js"></script>
<!-- ##### end Task AJAX ##### -->

<!--content container -->
<div class="container-fluid" style="width: 90%; max-width: 1300px!important;">

    <!-- Tassks Header: SLURM, Title -->
    <div class="section-wrap-long">

        <!-- SLURM button -->
        <!--        <div style="border: ; display: block;text-align: right; ">-->
        <!--            <button style="padding: 0 5px; border-radius: 8px; border: 2px solid #782f40; background-color: #915664; position: relative">-->
        <!--                <a href=""-->
        <!--                   style="text-decoration-line: none; color: #FFFFFF; border-radius: 25px; height: 20px; ">-->
        <!--                    Slurm Emulator-->
        <!--                </a>-->
        <!--            </button>-->
        <!--        </div>-->

        <!--   Title: Who's Task Board -->
        <div class="page-title"
        ">
        <!--            <div style="position: relative; display: inline; text-align: center; margin: 20px; padding: 25px">-->
        <span style=""> <?php echo $_SESSION['username_hbdi'] . "'s " ?>Tasks </span>
    </div>
</div>
<!-- end of Task header -->

<!-- Content Display Section-->
<div class="section-wrap-long">
    <!-- Projects Pane -->
    <div id="taskList" style="display: inline">

        <div class="section-pane" style="width: 100%">

            <form method="POST" style="display: inline">

                <!-- pane header: Projects -->
                <div class="pane-header">
                    <div class="title" style="display: inline">
                        Tasks
                    </div>

                    <div style="display: inline ; background-color: transparent; border: none; color: lightgrey"
                         data-toggle="modal"
                         data-target="#taskAddModal">
                        <i class="fas fa-plus-circle"></i>
                    </div>

                    <div style="display: none; margin-left: 5px; color: dimgrey" id="taskMenu">

                        <button name="submitTaskAcknowledge" value="submitTaskAcknowledge" id="submitTaskAcknowledge" href=""
                                style="color: #782f40; background-color: transparent; display: inline; padding: 0"> Acknowledge
                        </button>
                        |
                        <button name="submitTaskWorking" value="submitTaskWorking" id="submitTaskWorking" href=""
                                style="color: #782f40; background-color: transparent; display: inline; padding: 0"> Working
                        </button>
                        |
                        <button name="submitTaskComplete" value="submitTaskComplete" id="submitTaskComplete" href=""
                                style="color: #782f40; background-color: transparent; display: inline; padding: 0"> Complete
                        </button>
                        |
                        <button name="submitTaskVerify" value="submitTaskVerify" id="submitTaskVerify"
                                style="color: #782f40; background-color: transparent; display: inline; padding: 0"> Verify
                        </button>
                        |
                        <button name="submitTaskArchive" value="submitTaskArchive" id="submitTaskArchive" href=""
                                style="color: #782f40; background-color: transparent; display: inline; padding: 0"> Archive
                        </button>
                        |
                        <!--                    <button name="submit" value="delete" id="taskDelete" href=""-->
                        <button name="submitTaskDelete" value="submitTaskDelete" id="submitTaskDelete" href=""
                                style="color: #782f40; background-color: transparent; display: inline; padding: 0"> Delete
                        </button>
                        |
                        <button name="submit" value="" href=""
                                style="color: #782f40; background-color: transparent; display: inline; padding: 0"> Annotate
                        </button>
                    </div>
                </div>

                <div class="pane-content">
                    <div style="padding-left: 7px">
                        <div class='content-header'
                             style='padding: 0; width: 11px; margin-right:0; '>
                        </div>
                        <div class="content-header" style="width: 3%"> ID</div>
                        <div class="content-header" style="width: 20%"> Title</div>
                        <div class="content-header" style="width: 5%"> From</div>
                        <div class="content-header" style="width: 5%"> To</div>
                        <div class="content-header" style="width: 5%"> Priority</div>
                        <div class="content-header" style="width: 5%"> Due</div>
                        <div class="content-header" style="width: 7%"> Assigned</div>
                        <div class="content-header" style="width: 5%"> Received</div>
                        <div class="content-header" style="width: 5%"> Working</div>
                        <div class="content-header" style="width: 5%"> Done</div>
                        <div class="content-header" style="width: 5%"> Verified</div>
                        <div class="content-header" style="width: 5%"> Status</div>
                        <div class="content-header" style="width:"> Remark</div>
                    </div>

                    <?php
                    $stmt = $pdo->query(" SELECT DISTINCT id_project FROM project_user WHERE id_user = $uid_hbdi")->fetchAll();
                    foreach ($stmt
                             as $row) {
                        $id_project_individual = $row['id_project'];
                        $projects = $pdo->query(" SELECT title_project, title_project_short, id_creator FROM projects WHERE id_project = $id_project_individual")->fetchAll();
                        foreach ($projects

                                 as $prj) {
                            $title_project_short = $prj['title_project_short'];
                            $title_project = $prj['title_project'];
                            $username_hbdi_project = $prj['id_creator'];
                            $username_hbdi_project = $pdo->query("SELECT username FROM user WHERE id_user = $username_hbdi_project")->fetch();
                            $username_hbdi_project = $username_hbdi_project['username'];
                            echo "<div class='content-title'><a href='$p/projects/$username_hbdi_project/$title_project_short.php'>$title_project_short: $title_project</a> </div>";


                            $stmt = $pdo->query("
SELECT DISTINCT id_task, title_task, created_by, assigned_to, date_due, priority, status,time_assigned, date_acknowledged, date_begin, resource, date_due, priority, time_completed, time_verified, status, remark   
 FROM task 
 WHERE ((assigned_to = '$uid_hbdi' OR created_by = '$uid_hbdi') AND id_project = $id_project_individual)
 ORDER BY date_due ASC;
 ");
                            foreach ($stmt

                                     AS $row) {

                                $id_task = $row['id_task'];
                                $title_task = $row['title_task'];
                                $from = $row['created_by'];
                                $to = $row['assigned_to'];
                                $due = date('m-d', $row['date_due']);

                                $priority = $row['priority'];

                                $time_assigned = $row['time_assigned'];
                                $date_assigned = ($time_assigned) ? date("m-d", $time_assigned) : null;
                                $date_assigned_tooltip = date('Y-m-d H:m:s', $time_assigned);

                                $received = ($row['date_acknowledged']) ? (date('m-d', $row['date_acknowledged'])) : null;
                                //                    $received = date('m-d', $row2['date_acknowledged']);
                                $received_tooltip = date('Y-m-d H:m:s', $row['date_acknowledged']);

                                $date_begin = ($row['date_begin']) ? (date('m-d', $row['date_begin'])) : null;
                                $date_begin_tooltip = ($date_begin) ? date('Y-m-d H:m:s', $row['date_begin']) : null;

                                $resource = $row['resource'];

                                $time_completed = ($row['time_completed']) ? (date('m-d', $row['time_completed'])) : null;
                                //                    ($row2['time_completed']) ? $date_completed = date('m-d', $row2['time_completed']) : null;
                                $time_completed_tooltip = ($time_completed) ? date('Y-m-d H:m:s', $row['time_completed']) : null;

                                $time_verified = $row['time_verified'];
                                $date_verified = ($time_verified) ? date("m-d", $time_verified) : null;
                                $date_verified_tooltip = date('Y-m-d H:m:s', $time_verified);

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

                                $remark = $row['remark'];


                                $user1 = $pdo->query(" SELECT name_first, name_last FROM user WHERE id_user = '$from' ");
                                foreach ($user1

                                         as $person1) {
                                    $from = $person1['name_first'];
                                    $from_tooltip = $person1['name_first'] . ' ' . $person1['name_last'];
                                    $user2 = $pdo->query(" SELECT name_first, name_last FROM user WHERE id_user = $to ");
                                    foreach ($user2

                                             as $person2) {
                                        $to = $person2['name_first'];
                                        $to_tooltip = $person2['name_first'] . ' ' . $person2['name_last'];
                                        ?>
                                        <div id="taskList">

                                            <div class='content-item-wrap' id='<?php echo $id_task; ?>'>
                                                <input name='id_project' value='<?php echo $id_project_individual; ?>' hidden>
                                                <input class='content-item' style='margin: 4px 2px 0 0; width: 15px;'
                                                       type='checkbox'
                                                       name='taskCheck[]'
                                                       id='<?php echo $id_task; ?>'
                                                       value='<?php echo $id_task; ?>'
                                                       onclick='loadTaskMenu()'>
                                                <div class='content-item' style='width: 3%'> <?php echo $id_task; ?> </div>
                                                <div class='content-item' style='width: 20%; overflow: hidden' data-toggle="tooltip"
                                                     title="<?php echo $title_task; ?> "> <?php echo $title_task; ?> </div>
                                                <div class='content-item' style='width: 5%' data-toggle="tooltip"
                                                     title="<?php echo $from_tooltip; ?> "> <?php echo $from; ?> </div>
                                                <div class='content-item' style='width: 5%' data-toggle="tooltip"
                                                     title="<?php echo $to_tooltip; ?> "> <?php echo $to; ?> </div>
                                                <div class='content-item' style='width: 5%'> <?php echo $priority; ?> </div>
                                                <div class='content-item' style='width: 5%'> <?php echo $due; ?> </div>
                                                <div class='content-item' style='width: 7%' data-toggle="tooltip"
                                                     title="<?php echo $date_assigned_tooltip; ?>"> <?php echo $date_assigned; ?> </div>
                                                <div class='content-item' style='width: 5%' data-toggle="tooltip"
                                                     title="<?php echo $received_tooltip; ?>"> <?php echo $received; ?> </div>
                                                <div class='content-item' style='width: 5%' data-toggle="tooltip"
                                                     title="<?php echo $date_begin_tooltip; ?>"> <?php echo $date_begin; ?> </div>
                                                <div class='content-item' style='width: 5%' data-toggle="tooltip"
                                                     title="<?php echo $time_completed_tooltip; ?> "> <?php echo $time_completed; ?> </div>
                                                <div class='content-item' style='width: 5%' data-toggle="tooltip"
                                                     title="<?php echo $date_verified_tooltip; ?> "> <?php echo $date_verified; ?> </div>
                                                <div class='content-item' style='width: 5%' data-toggle="tooltip"
                                                     title="<?php echo $status_tooltip; ?>"> <?php echo $status; ?> </div>
                                                <div class='content-item' style=''> <?php echo $remark; ?> </div>
                                            </div>
                                        </div>

                                        <?php
                                        $previous_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                    }
                                }
                            }
                        }
                    }
                    ?>
                    <input name="previous_url" value="<?php echo $previous_url; ?>" hidden>
            </form>
        </div>
        <!-- end Pane Content: Tasks-->
    </div>
    <!-- ### end of Task Section Pane -->
</div>
</div>
<!-- ##### end of section wrap ##### -->


<?php include_once("./includes/footer.php"); ?>







