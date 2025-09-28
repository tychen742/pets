<!-- ##### JS for task/member/file actions ##### -->
<script defer src="https://tychen.us/hbdi/scripts/taskMenu.js"></script>
<script defer src="https://tychen.us/hbdi/scripts/memberMenu.js"></script>
<script defer src="https://tychen.us/hbdi/scripts/fileMenu.js"></script>
<!-- ##### end of JS for task/member/file actions ##### -->


<?php
include_once("$_SERVER[DOCUMENT_ROOT]/hbdi/scripts/utilities.php"); // #### facebook_time
//include_once("$_SERVER[DOCUMENT_ROOT]/hbdi/scripts/modals.php"); // #### modals

//include_once("../../includes/headers.php");

// get file information
$title_project_short = basename($_SERVER['SCRIPT_FILENAME'], '.php');
//$username_hbdi = $_SESSION['username_hbdi'];
//if (isset ($username_hbdi)) {
// ### get project info from DB
$stmt = $pdo->prepare(" SELECT id_project, title_project, title_project_short, project_description FROM projects WHERE title_project_short = '$title_project_short' ");
$stmt->execute();
$result = $stmt->fetch();
$id_project = $result['id_project'];
$title_project = $result['title_project'];
//$title_project_short = $result['title_project_short'];  // just get this from basename
$project_description = $result['project_description'];

$user_dir = $_SERVER['DOCUMENT_ROOT'] . "/hbdi/projects/$username_hbdi";
$prj_dir = $user_dir . '/' . $title_project_short . '_files';
//$test_file = $prj_dir . '/' . 'test.txt';
//unlink($test_file);
?>

<!-- Container -->
<div class="container-fluid" style="box-shadow: 0 0 25px #782f40;">

    <div class="row" style="border: ; padding: 0 10px">
        <div id="msg"></div>

        <!-- project Headers row/Wrapper: compliances, publish, titles, description, keywords, members -->
        <div class="section-wrap">

            <!-- ### Title - Short & Compliance Icons ### -->
            <div style="display: inline-block;">
                &nbsp;
                <button style="display: inline-block; float: left; padding: 0 5px; border-radius: 8px;
                    border: 2px solid #5b5b5b; background-color: #777777; color: white">
                    <?php echo $title_project_short; ?>
                </button>

                <div style="display: inline-block; font-size: 1.0rem">

                    <i data-toggle="tootip" data-placement="right" ;
                       title="FSU IRB approved from 2020-02-20 to 2021-02-19"
                       class="fas fa-university"></i> <i data-toggle="tootip" data-placement="right" ;
                                                         title="Project contains human subject data"
                                                         class="fas fa-user-circle"></i>

                    <span style="padding: 0 3px;  color: #915664">|</span>

                    <i data-toggle="tooltip" data-placement="bottom" title="Project contains private data"
                       class="fas fa-user-secret"></i>

                    <i data-toggle="tooltip" data-placement="bottom" title="Project contains protected data"
                       class="fas fa-lock"></i>

                    <i data-toggle="tooltip" data-placement="bottom" title="Project contains public data"
                       class="fas fa-unlock-alt "></i>

                    <span style="padding: 0 3px;  color: #915664">|</span>

                    <i data-toggle="tooltip" data-placement="bottom" title="Project contains HIPAA data"
                       class="fas fa-hospital-symbol"></i>

                    <img data-toggle="tooltip" data-placement="bottom" title="Project granted by NIH"
                         style="margin-bottom: 3px" src="../../images/NIH_BW.png" width="20">

                    <img data-toggle="tooltip" data-placement="bottom" title="Project contains FDA Part 11 data"
                         style="margin-bottom: 3px" src="../../images/FDA.png" width="18">

                    <span style="padding: 0 3px;  color: #915664">|</span>

                    <i data-toggle="tooltip" data-placement="bottom"
                       title="Project to be published under Creative Commons copyright-license"
                       class="fab fa-creative-commons"></i>
                </div>

            </div>
            <span style="color: white"><?php echo "(PID:$id_project)"; ?></span>

            <!-- ### Publish Project ### -->
            <div style="display: inline-block; float: right"
                 data-toggle="tooltip" data-placement="bottom" title="Make project public and create data citations">
                <button style="padding: 0 5px; border-radius: 8px; border: 2px solid #782f40; background-color: #915664; ">
                    <a style="color: #FFFFFF; border-radius: 25px; height: 20px; "
                       data-toggle="modal"
                       data-target="#publishModal"> Publish Project</a>
                </button>
            </div>
        </div>
    </div>
    <!-- ##### end of heading row ##### -->

    <script type="text/javascript">
        var btn = document.querySelector('button');
        var hint = document.getElementById('hidePrjHeaders');
        var height = hint.clientHeight;
        var width = hint.clientWidth;
        console.log(width + 'x' + height);
        // initialize them (within hint.style)
        hint.style.height = height + 'px';
        hint.style.width = width + 'px';

        btn.addEventListener('click', function () {
            if (hint.style.visibility == 'hidden') {
                hint.style.visibility = 'visible';
                //hint.style.opacity = '1';
                hint.style.height = height + 'px';
                hint.style.width = width + 'px';
                hint.style.padding = '.5em';
            } else {
                hint.style.visibility = 'hidden';
                //hint.style.opacity = '0';
                hint.style.height = '0';
                hint.style.width = '0';
                hint.style.padding = '0';
            }

        });
    </script>
    <!-- ##### hiding headers row ##### -->
    <div class="row">
        <!--            -->
        <div class="col" style="display: block" data-toggle="tooltip" data-placement="bottom"
             title="Fold/unfold header blocks">
            <div style="float: right; background-color: transparent" onclick="hidePrjHeaders()">
                <button style="background-color: whitesmoke"><i style="color: #969696;"
                                                                class="fas fa-external-link-alt fa-sm"></i></button>
            </div>
        </div>
        <!-- ### hide project Headers Script ### -->
        <script type="text/javascript">
            function hidePrjHeaders() {
                var x = document.getElementById("prjHeaders");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>
    </div>
    <!-- ##### end of hiding project Headers ##### -->


    <!-- ##### row of headers: Title, Description, Keywords, Wiki ##### -->
    <div class="row" style="width: 100%; border: ">
        <div id="prjHeaders" style="transition: all 1s linear; display: block; width: 100%; border: ">

            <!-- ### project Titles ### -->
            <div class="col-lg-12" style="width: 100%">
                <div class="row" style="width: 100%">

                    <div style="font-size: 1.8em; ; text-align: center; padding: 0 25px 0 25px; width: 100%  ">
                        <?php echo $title_project; ?>
                    </div>
                </div>
            </div>
            <!-- ### end of project Titles ### -->


            <!-- ##### Project Description ##### -->
            <!-- ### Ajax Update Project Description ### -->
            <?php
            // https://w3lessons.info/html5-inline-edit-with-php-mysql-jquery-ajax/
            if (!empty($_POST['prjDescription'])) {
                $prjDescription = $_POST['prjDescription'];
                {
                    $prjDescription = strip_tags(trim($prjDescription));
                    //update the values
                    $sql = "UPDATE projects SET project_description = '$prjDescription' WHERE id_project = '$id_project' ";
                    $stmt = $pdo->prepare($sql)->execute();
                    echo "Updated";
                }
            }

            ?>
            <!--                    src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">-->
            <!--            <script-->
            <!--                    src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">-->
            <!--            </script>-->
            <script>
                $(function () {
                    //acknowledgement message
                    var message_status_prjDescription = $("#status_PrjDescription");
                    $("#prjDescription[contenteditable=true]").blur(function () {
                        var prjDescription = $(this).attr("id");
                        var value = $(this).text();
                        $.post('', prjDescription + "=" + value, function (data) {
                            if (data != '') {
                                message_status_prjDescription.show();
                                // message_status.text(data);
                                message_status_prjDescription.text("Updating...");
                                //hide the message
                                setTimeout(function () {
                                    message_status_prjDescription.hide()
                                }, 1000);
                            }
                        });
                    });
                });
            </script>

            <style>
                #status_PrjDescription { padding: 10px; background: #efefef; color: #000; font-weight: bold; font-size: 12px; margin-bottom: 10px; display: none; width: 100px; }
            </style>
            <!-- ### end of AJAX for Project Description ### -->

            <!-- ### Project Description printing content ### -->
            <div class="section-pane col-lg-12" style="width: 100%; padding-left: 15px; ">
                <div class="pane-header">
                    <span class="title">Project Description </span>
                </div>
                <div class="pane-content">
                    <div id="status_PrjDescription"></div>
                    <div id="prjDescription" contenteditable="true" style="margin-bottom: 10px">
                        <?php echo $project_description ?>
                    </div>
                </div>
            </div>
            <!-- ### end of Ajax Update Project Description ### -->

            <!--TODO: make keywords work -->
            <!-- ##### Ajax Update Keywords ##### -->
            <?php
            // https://w3lessons.info/html5-inline-edit-with-php-mysql-jquery-ajax/
            if (!empty($_POST['keyWord'])) {
                $keyWord = $_POST['keyWord'];
                {
                    $keyWord = strip_tags(trim($keyWord));
                    //update the values
                    $sql = "UPDATE project_keyword SET keyword = '$keyWord' WHERE id_project = '$id_project' ";
                    $stmt = $pdo->prepare($sql)->execute();
                    echo "Updated";
                }
            }
            ?>
            <script>
                $(function () {
                    var message_status_keyWord = $("#status_keyWord");
                    $("#keyWord[contenteditable=true]").blur(function () {
                        var keyWord = $(this).attr("id");
                        var value = $(this).text();
                        $.post('', keyWord + "=" + value, function (data) {
                            if (data != '') {
                                message_status_keyWord.show();
                                message_status_keyWord.text("Updating...");
                                setTimeout(function () {
                                    message_status_keyWord.hide()
                                }, 1000);
                            }
                        });
                    });
                });
            </script>
            <style>
                #status_keyword { padding: 10px; background: #efefef; color: #000; font-weight: bold; font-size: 12px;
                    margin-bottom: 10px; display: none; width: 100px; }
            </style>
            <!-- ##### Ajax Update Keywords ##### -->


            <!-- ##### Keywords & Wiki row ##### -->
            <div class="col-12" style=" padding: 0">
                <div class="row" style="padding-top: 10px; border: ">
                    <div class="col-5" style="border: ; padding-left: 0">
                        <!-- ### Keywords pane ### -->
                        <div class="section-pane" style="border: ; padding-left: 10px">
                            <div class="pane-header" style="padding-left: 5px">
                                <div class="title"> Keywords</div>
                                <!-- add keyword icon-->
                                <!--                                <i style="background-color: transparent; color: #888888"-->
                                <!--                                   data-toggle="modal" href="-->
                                <?php //echo $p; ?><!--/scripts/modals.php"-->
                                <!--                                   data-target="#keywordModal"-->
                                <!--                                   class="far fa-edit"></i>-->
                            </div>
                            <div class="pane-content">
                                <div id="status_keyword"></div>
                                <div id="keyword" contenteditable="true" style="margin-bottom: 10px">
                                    <?php echo "Placeholder: " ?>
                                </div>
                            </div>

                            <!-- list keywords -->
                            <div class="pane-content" style="padding-left: 5px">
                                <?php
                                $stmt = $pdo->prepare(" SELECT keyword FROM project_keyword WHERE id_project = '$id_project' ");
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                                foreach ($result as $row) {
                                    echo $row['keyword'] . ", ";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!--        end of Listing KEYwords -->


                    <!--  ### begin Wiki header section Pane ### -->
                    <!-- ### wiki update -->
                    <!--                    // https://w3lessons.info/html5-inline-edit-with-php-mysql-jquery-ajax/-->
                    <?php
                    if (!empty($_POST['update_wiki'])) {
                        $update_wiki = $_POST['update_wiki'];

                        $update_wiki = strip_tags(trim($update_wiki));
                        //update the values
                        $sql = "UPDATE projects SET wiki = '$update_wiki' WHERE id_project = '$id_project' ";
                        $stmt = $pdo->prepare($sql)->execute();
                        echo "Updated";
                    } else {
//                        echo "Problem updating wiki content.";
                    }
                    ?>
                    <!--                            src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
                    <!--                    <script type="text/javascript"-->
                    <!--                            src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
                    <script>
                        $(function () {
                            //acknowledgement message
                            var message_status_wiki = $("#status_wiki");
                            $("#update_wiki[contenteditable=true]").blur(function () {
                                var update_wiki = $(this).attr("id");
                                var value = $(this).text();
                                // $.post('', prjDescription + "=" + value, function (data) {
                                $.post('', update_wiki + "=" + value, function (data) {
                                    if (data != '') {
                                        message_status_wiki.show();
                                        // message_status.text(data);
                                        message_status_wiki.text("Updating...");
                                        // document.getElementsById("status_wiki").innerHTML = "Updating...";
                                        // document.getElementsById("status_wiki").text = "Updating...";
                                        //hide the message
                                        setTimeout(function () {
                                            message_status_wiki.hide()
                                        }, 1000);
                                    }
                                });
                            });
                        });
                    </script>

                    <style>
                        #status_wiki { padding: 10px; background: #eeeeee; color: #000; font-weight: bold; font-size: 12px; margin-bottom: 10px; display: none; width: 100px; }
                    </style>

                    <!-- ### begin wiki display ### -->
                    <div class="col-7">
                        <div class="section-pane" style="min-height: ;">
                            <div class="pane-header">
                                <div class="title">
                                    Project Notebook
                                </div>
                                <!--                                    <div style="display: inline; position: relative; margin: 0 2px">-->
                                <!--                                        <button style="background-color: transparent; border: none; color: #888888"-->
                                <!--                                                data-toggle="modal"-->
                                <!--                                                data-target="#wikiModal">-->
                                <!--                    <i class="far fa-edit"></i>-->
                                <!--                                        </button>-->
                                <!--                                    </div>-->
                            </div>
                            <div class="pane-content">
                                <div id="status_wiki"></div>
                                <div>
                                    <?php
                                    $stmt = $pdo->prepare(" SELECT wiki FROM projects WHERE title_project_short = '$title_project_short' ");
                                    $stmt->execute();
                                    $result = $stmt->fetch();
                                    $wiki = $result['wiki'];
                                    ?>

                                    <div id="update_wiki"
                                         contenteditable="true"> <?php echo $wiki; ?> </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ### end of wiki column ### -->

                    <!-- ##### begin The Wiki Modal ##### -->
                    <div class="modal" id="wikiModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal header -->
                                <div class="modal-header">
                                    <h4 class="modal-title"> Edit Wiki Entry </h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;
                                    </button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    // TD: Edit wiki entry.
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                        Close
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- ##### End of Wiki modeL ##### -->
                </div>
                <!-- ##### End of keywords and wiki Row ##### -->
            </div>
        </div>
    </div>
    <!-- ##### end of row of headers: title, project description, keywords, wiki ##### -->


    <!-- ##### begin row Contributors/Members and Tasks row ##### -->
    <div class="row" style="padding-top: 10px; border: ">
        <!-- ##### Project MEMBERS / contributors ##### -->
        <!-- TODO: Only contributors can see the project -->
        <!--                <div class="section-pane" style="width: 49.75%">-->
        <div class="section-pane col-5">
            <form method="POST">
                <div class="pane-header">
                    <span class="title"> Project Team </span>

                    <div data-toggle='tooltip' data-placement='bottom' title='Add a new contributor'
                         style='display: inline-block'>
                        <i style='background-color: transparent; border: none; color: grey; '
                           data-toggle='modal' data-target='#memberModalAdd'
                           class='fas fa-plus-circle'> </i>
                    </div>

                    <div style="margin-left: 5px;  color: dimgrey; display: none" id="submitMemberRemove">
                        <button type="submit" value="submitMemberRemove" name="submitMemberRemove"
                                style="color: #782f40; display: inline; padding: 0; background-color: transparent; border: none; font-size: 1em">
                            remove
                        </button>
                    </div>
                </div>

                <div class="pane-content">
                    <div>
                        <div class='content-header' style='width: 17px'></div>
                        <div class='content-header' style='width: 55%'> Name</div>
                        <div class='content-header' style='width: 20%'> Role</div>
                        <div class='content-header' style='width: '> UID</div>
                    </div>

                    <div id="memberList">
                        <?php
                        $stmt = $pdo->prepare(" 
 SELECT DISTINCT 
    u.id_user, 
    u.name_first, 
    u.name_last,
    pu.role role
 FROM user u
 JOIN project_user pu
 ON u.id_user = pu.id_user 
 WHERE id_project = '$id_project' ORDER BY name_last;
 ");
                        $stmt->execute();
                        $result = $stmt->fetchAll();


                        foreach ($result as $row) {
                            $role = $row['role'];
                            $name_first = $row['name_first'];
                            $name_last = $row['name_last'];
                            $id_user = $row['id_user'];
                            ?>
                            <!--                    <div id="memberList">-->
                            <div class='content-item-wrap'>

                                <!--                                   value='--><?php //echo $id_user; ?><!--'-->
                                <input class='content-header'
                                       style='margin: 6px 2px 0 0; ; width: 15px; '
                                       type='checkbox'
                                       name='memberMenuCheck[]'
                                       id='<?php echo $id_user; ?>'
                                       value='<?php echo $id_user; ?>'
                                       onclick='loadMemberMenuCheck()'>

                                <div class='content-item'
                                     style='width: 55%'> <?php echo $name_first, ' ', $name_last; ?> </div>
                                <div class='content-item' style='width: 20%'> <?php echo $role; ?> </div>
                                <div class='content-item' style=''> <?php echo $id_user; ?> </div>
                                <br>
                                <!--                        </div>-->
                            </div>
                            <?php
                        }
                        ?>
                        <input name='id_project' id="id_project_member" value=<?php echo $id_project; ?> hidden>

                    </div>
                </div>
            </form>
        </div>
        <!-- ### End of existing members/contributors listing col -->


        <!-- ### begin tasks section pane ### -->
        <?php
        //        echo "id_project in project_view PHP" . $id_project; // GOOD
        ?>
        <script>

            var id_project = "<?php echo $id_project; ?>";
            // $('#submitTaskAdd').on('show.bs.modal', function (e) {
            //     var id_project = $(this).attr('id_project');
            /*
            proceed with rest of modal using the rowid variable as necessary
            */
            // $.post('/var/www/tychen.us/hbdi/scripts/modals.php', {variable: id_project});
            // });
            // document.write(id_project); // GOOD
        </script>

        <div class="col-7">
            <div class="section-pane " style="min-height: 100px ">
                <!-- task header -->
                <form method="POST">
                    <div class="pane-header">
                        <div class="title" style="display: inline-block">
                            Project Tasks
                            <!--                            <script>-->
                            <!--                                $(document).on("click", "#taskAddModal", function () {-->
                            <!--                                    let idOfProject = $(this).data('id');-->
                            <!--                                    $(".modal-body #id_project").val(idOfProject);-->
                            <!--                                });-->
                            <!--                            </script>-->
                            <div style="display: inline; position: relative;float: ; padding-top: 0 ; margin: 0 2px">
                                <i
                                        style="background-color: transparent; border: none; color: grey; display: inline"
                                        id_project="<?php echo $id_project; ?>"
                                        data-toggle="modal"
                                        data-target="#taskAddModal"
                                        class="fas fa-plus-circle"> </i>
                            </div>
                        </div>

                        <div style="display: none; margin-left: 5px; color: dimgrey"
                             id="taskMenu">

                            <button name="submitTaskAcknowledge" value="submitTaskAcknowledge"
                                    id="submitTaskAcknowledge"
                                    data-toggle="tooltip" title="Acknowledge receiving the task(s)"
                                    style="color: #782f40; background-color: transparent; display: inline; padding: 0">
                                Ack.
                            </button>
                            |
                            <button name="submitTaskWorking" value="submitTaskWorking" id="submitTaskWorking"
                                    style="color: #782f40; background-color: transparent; display: inline; padding: 0">
                                Working
                            </button>
                            |
                            <button name="submitTaskComplete" value="submitTaskComplete" id="submitTaskComplete"
                                    style="color: #782f40; background-color: transparent; display: inline; padding: 0">
                                Done
                            </button>
                            |
                            <button name="submitTaskVerify" value="submitTaskVerify" id="submitTaskVerify"
                                    style="color: #782f40; background-color: transparent; display: inline; padding: 0">
                                Verify
                            </button>
                            |
                            <button name="submit" value=""
                                    style="color: #782f40; background-color: transparent; display: inline; padding: 0">
                                Annotate
                            </button>
                            |
                            <button name="submitTaskArchive" value="submitTaskArchive" id="submitTaskArchive"
                                    style="color: #782f40; background-color: transparent; display: inline; padding: 0">
                                Archive
                            </button>
                            |
                            <button name="submitTaskDelete" value="submitTaskDelete" id="submitTaskDelete"
                                    data-toggle="tooltip" title="Delete the task(s)"
                                    style="color: #782f40; background-color: transparent; display: inline; padding: 0">
                                Del.
                            </button>
                        </div>
                    </div>

                    <div id="taskList">
                        <div class="pane-content">
                            <div>
                                <div class='content-header' style="width: 17px;"> &nbsp;</div>
                                <div class='content-header' style='width: 30%;'> Task</div>
                                <div class='content-header' style='width: 15%;'>Owner</div>
                                <div class='content-header' style='width: 10%;'> PRI</div>
                                <div class='content-header' style='width: 15%;'>Due in</div>
                                <div class='content-header' style='width: 10%;'>Status</div>
                                <div class='content-header' style='width: ; text-align: left;'> ID</div>
                            </div>

                            <?php
                            $stmt = $pdo->query(" 
SELECT id_task, title_task, assigned_to, date_due, priority, status, id_project  
FROM task WHERE (assigned_to = '$uid_hbdi' 
OR created_by = '$uid_hbdi') 
AND 
id_project = '$id_project' "
                            );

                            while ($row = $stmt->fetch()) {

                                $id_task = $row['id_task'];
                                $assigned = $row['assigned_to'];
                                $date_due = $row['date_due'];
                                $status = $row['status'];
//                            $status = $row2['status'];

                                if ($status == 'ACK') {
                                    $status_tooltip = 'Task is received/acknowledged.';
                                } elseif ($status == 'WOI') {
                                    $status_tooltip = 'Task owner is working on it.';
                                } elseif ($status == 'DONE') {
                                    $status_tooltip = 'Task is done/completed.';
                                } elseif ($status == 'VFY') {
                                    $status_tooltip = 'Task is verified as completed by originator.';
                                } elseif ($status == 'ARC') {
                                    $status_tooltip = 'The task is archived.';
                                }

                                $priority = ($row['priority'] == 'Medium') ? 'Med' : $row['priority'];
                                $now = time();
                                $diff = (isset($now)) ? abs($date_due - $now) : 999;
                                $days = floor($diff / (60 * 60 * 24));
                                if ($days <= 3) {
                                    $days = "<span style='color: red'> $days </span>";
                                }

                                $title_task = $row['title_task'];

                                if ($assigned == 0) {
                                    $name = 'TBD';
                                } else {
                                    $stmt2 = $pdo->query(" SELECT name_first FROM user WHERE id_user = '$assigned' ");
                                    foreach ($stmt2 as $row2) {
                                        $name = $row2['name_first'];
                                    }
                                    ?>

                                    <div class='content-item-wrap' id='<?php echo $id_task; ?>'>
                                        <input name="id_project" value="<?php echo $id_project; ?>" hidden> <input
                                                class='content-header'
                                                style='margin: 6px 2px 0 0; width: 15px; '
                                                type='checkbox'
                                                name='taskCheck[]'
                                                id='<?php echo $id_task; ?>'
                                                value='<?php echo $id_task; ?>'
                                                onclick='loadTaskMenu()'>
                                        <div class='content-item'
                                             style='width: 30%; '> <?php echo $title_task; ?> </div>
                                        <div class='content-item'
                                             style='width: 15%; border: '> <?php echo $name; ?> </div>
                                        <div class='content-item' style='width: 10%; '> <?php echo $priority; ?> </div>
                                        <div class='content-item'
                                             style='width: 15%; '> <?php echo $days . ' days'; ?> </div>
                                        <div class='content-item' style='width: 10%; ' data-toggle="tooltip"
                                             title="<?php echo $status_tooltip; ?>">  <?php echo $status; ?> </div>
                                        <div class='content-item' style='width: 10%; '>  <?php echo $id_task; ?> </div>
                                    </div>
                                    <?php
                                }
                            }
                            //                            $previous_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                            ?>
                            <!--                        <input name="previous_url" value="-->
                            <?php //echo $previous_url; ?><!--" hidden>-->
                        </div>
                    </div>
                </form>
                <!-- end of pane content: list TASKs -->
            </div>
            <!-- ### end of task Section PANE -->
        </div>
        <!-- ### end of Tasks Column ### -->
    </div>
    <!-- ##### end of members/contributors tasks row ##### -->


    <!-- ##### row listing Project FILES row ##### -->
    <div class="row" style="padding-top: 20px; width:; border: ">
        <!-- beginning of File Pane -->
        <div class="section-pane col-12">
            <div class="pane-header">
                <ul class="nav nav-tabs " id="tabContent" style="display: inline-block;">
                    <div style="display: inline-block" data-toggle="tooltip" data-placement="top"
                         title="List all files">
                        <li class="active title" style="padding-top: 2px"><a href="#" data-toggle="tab"> All files </a>
                        </li>
                        |
                    </div>
                    <div style="display: inline-block"
                         data-toggle="tooltip" data-placement="top"
                         title="Structured, unstructured, text datasets...">
                        <li class="title" style="padding-top: 2px; color: #915664; font-weight: 400">
                            <a href="#" data-toggle="tab"> Datasets </a>
                        </li>
                        |
                    </div>

                    <div style="display: inline-block" data-toggle="tooltip" data-placement="top"
                         title="Drafts, manuscripts, preprints...">
                        <li class="title" style="padding-top: 2px; color: #915664; font-weight: 400"><a href="#"
                                                                                                        data-toggle="tab">
                                Documents </a></li>
                    </div>

                </ul>
                <div style="display: inline-block">
                    <i data-toggle="tooltip" data-placement="bottom"
                       title="Add a new file category"
                       style="color: grey; font-size: 1em"
                       class="fas fa-file-word "> </i>
                </div>
                <div style="display: inline; color: grey; font-size: 1em;">
                    <i data-toggle="tooltip" data-placement="bottom"
                       title="Add a new file folder"
                       class="fas fa-folder-plus"></i>
                </div>
                <script>
                    $(document).on("click", "#fileUpload", function () {
                        let idOfProject = $(this).data('id');
                        $(".modal-body #id_project").val(idOfProject);
                    });
                </script>
                <div style="display: inline; color: grey; font-size: 1em;"
                     data-toggle="tooltip" data-placement="top" title="Upload a new file">
                    <!--                    <a href='-->
                    <?php //echo "$p/scripts/modals.php"; ?><!--' id="fileUpload">-->
                    <i id="fileUpload" href="#fileModalUpload" data-toggle="modal" data-id="<?php echo $id_project; ?>"
                       class="fas fa-cloud-upload-alt"> </i>
                </div>

                <!-- ##### search Box ##### -->
                <div style="display: inline; width:; float: right; box-shadow: 2px 2px 2px lightgrey;">
                    <form action="" style="
                            height: ;
                            float: right;
                            margin: 0 0 0 25px">
                        <input type="text" placeholder=" Search/filter files..."
                               onkeyup="showResult(this.value)" ;
                               style="border: 1px solid #8a6d3b; width: 120px; height: ;border-radius: 2px; padding: 2px 0 0 5px;">
                        <button type="submit"
                                style="
                                float: right;
                                /*padding: 0;*/
                                background-color: white;
                                width: 35px;
                                margin: 2px 0 2px 0!important;
">
                            <i class="fa fa-search fa-sm" style="color: #782f40"></i>
                        </button>
                    </form>
                </div>
                <!-- #### end of search box #### -->


                <!-- ### actions ### -->
                <!--                <form action="" style="display: inline">-->
                <div class='title'
                     style="display: none; color: dimgrey; font-weight: 400; margin-left: 5px; text-decoration: none;"
                     id="fileMenu">
                    <a href="#">Download</a> | <a href="#">Load (VM)</a> | <a href="#"> Move </a> | <span href="#"> Annotate </span>
                                             |<a
                            href="#"> Archive </a> |

                                             <!--                        <input class='title' type="submit" name="submitDeleteFile" value="Delete"-->
                                             <!--                               style="font-weight: 400; background-color: transparent; border: 0; padding: 0; margin: 0">-->
                    <button type="submit" name="submitFileDelete" value="submitFileDelete" id="fileDelete"
                            style="display: inline; background-color: transparent; color: #782f40; font-weight: 400; border: 0; padding: 0; margin: 0"
                                             "> Delete</button>
                </div>

            </div>
            <!-- ### end of pane header ### -->
            <!--        begin showing List of FILES -->
            <div class="pane-content">
                <div style="padding-left: 5px">
                    <div class='content-header' style='padding: 0; width: 13px;'></div>
                    <div class='content-header' style='width: 5%; '> FID</div>
                    <div class='content-header' style='width: 30%'> Filename</div>
                    <div class='content-header' style='width: 30%'> Compliance</div>
                    <div class='content-header' style='width: 10%'> Type</div>
                    <div class='content-header' style='width: 10%'> Uploaded</div>
                    <div class='content-header' style='width: '> DL Stage</div>
                </div>
                <div id="fileList">

                    <?php
                    if (!isset($title_project_short)) {
                        error_log("\$title_project_short is empty in project_view.php.", 0);
                    } else {
                        $id_creator = $pdo->query(" SELECT id_creator FROM projects WHERE id_project = '$id_project'")->fetch();
                        $id_creator = $id_creator['id_creator'];
                        $username_hbdi_project = $pdo->query(" SELECT username FROM user WHERE id_user = '$id_creator'")->fetch();
                        $username_hbdi_project = $username_hbdi_project['username'];

                        $path = $_SERVER['DOCUMENT_ROOT'] . "/hbdi/projects/$username_hbdi_project/$title_project_short" . "_files/";
                    }
                    $files = scandir($path);
                    //                    echo "<form id='fileChkBox'>";
                    foreach ($files as $filename) {
                        if (($filename != ".") and ($filename != "..")) {
                            $stmt = $pdo->prepare("
SELECT id_file, date_uploaded, id_project, file_type 
FROM files 
WHERE name_file = '$filename' AND id_project = '$id_project' ORDER BY name_file");
                            $stmt->execute();
                            $result = $stmt->fetch();
                            $id_file = $result['id_file'];

                            $date_uploaded = $result['date_uploaded'];
                            $date_uploaded_tooltip = date('Y-m-d H:i:s', $result['date_uploaded']);
                            $date_uploaded_facebook = facebook_time_ago($date_uploaded_tooltip);
                            $file_type = $result['file_type'];
//                        $compliance = $result['compliance'];
//                            $date_time = (date("m-d-y H:i:s", $date_uploaded));
                            if ($id_file) {
                                $stmt2 = $pdo->query("SELECT permission FROM permission_store WHERE id_file = '$id_file'");
                                $compliance = "";
                                while ($row2 = $stmt2->fetch()) {
                                    $compliance .= $row2['permission'] . ' ';
                                }
                                ?>
                                <div class='content-item-wrap'>
                                    <input name="id_project" value="<?php echo $id_project; ?>" hidden> <input
                                            class='content-item'
                                            style='margin: 3px 2px 0 0; width: 15px;'
                                            type='checkbox'
                                            name='fileCheck[]'
                                            id=<?php echo $id_file; ?>
                                            value=<?php echo $id_file; ?>
                                            onclick='loadFileMenu()'>
                                    <div class='content-item' style='width: 5%;'> <?php echo $id_file; ?> </div>
                                    <div class='content-item' style='width: 30%; overflow: hidden' data-toggle="tooltip"
                                         title="<?php echo $filename; ?>"> <?php echo $filename; ?> </div>
                                    <div class='content-item' style='width: 30%; overflow: hidden' data-toggle="tooltip"
                                         title="<?php echo $compliance; ?>"> <?php echo $compliance; ?> </div>
                                    <div class='content-item' style='width: 10%;'> <?php echo $file_type; ?> </div>
                                    <div class='content-item' style='width: 10%;' data-toggle='tooltip'
                                         title="<?php echo $date_uploaded_tooltip; ?>"> <?php echo $date_uploaded_facebook; ?> </div>
                                    <div class='content-item' style='width: ;'></div>
                                </div>
                                <!--                            </form> -->
                                <?php
                            }
                        }
                    }
                    $previous_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                    ?>
                    <input name="previous_url" value="<?php echo $previous_url; ?>" hidden>
                    <!--                </form>-->
                </div>
                <!-- ### end of fileList ###x -->
            </div>
        </div>
    </div>
    <!--##### End of File row ##### -->

</div>
<!-- ### END of Container Fluid: Project Viewer -->

<?php
//} else {
//    exit;
//}

include_once("../../includes/footer.php");

?>


<!-- ### Publish Modal ### -->
<div class="modal" id="publishModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal header -->
            <div class="modal-header">
                <h4 class="modal-title"> Publish Project </h4>
                <button type="button" class="close" data-dismiss="modal">&times;
                </button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                // TODO: Make project viewable to the public // Note: Only content marked as public will published
                <div id="content-php"></div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <div style="text-align: right; ">
                    <button type="button" class="" data-dismiss="modal" style=" font-weight: 500; color: #FFFFFF;
            padding: 3px 5px; border-radius: 8px; margin: 4px; border: 2px solid #782f40; background-color: #915664; text-transform: none; height: 30px; vertical-align: top; float: left">
                        Preview Project
                    </button>
                    <button type="submit" id="pubProjBtn" style=" font-weight: 500; color: #EEEEEE;
            padding: 3px 5px; border-radius: 8px; margin: 4px; border: 2px solid #915664; background-color: #782f40;  ">
                        <a href="<?php echo $p ?>/project/publish_viewer.php"
                           style="text-decoration-line: none; color: #FFFFFF; height: 20px; "
                           target="_blank"> Publish Project </a>
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ### end of Publish Modal ### -->


<!-- ##### Add member in the Modal Project Team contributor MODal ##### -->
<div class="modal" id="memberModalAdd">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="memberAdd" method="post" action="<?php echo $p; ?>/scripts/member_menu.php">
                <div class="modal-header">
                    <h4 class="modal-title"> New Contributors </h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>
                <div class="modal-body" style="font-size: 0.9rem">
                    <div>
                        <form action="" method="POST" style="height: 29px">
                            <button type="submit"
                                    style="
                                /*position: relative;*/
                                display: inline;
                                float: right;
                                height: 27px;
                                padding: 0;
                                background-color: white;
                                width: 21px;
                                margin: 2px 0 2px 0!important;
                                border-bottom-right-radius: 3px;
                                border-top-right-radius: 3px">
                                <i class="fa fa-search fa-sm" style="color: #782f40"></i>
                            </button>
                            <input type="text" placeholder=" Filter/search users..."
                                   style="height: 27px;
                                           width: 220px;
                                border: 1px solid lightgrey;
                                /*margin-bottom: 3px;*/
                                margin: 2px 0 2px 0;
                                float: right;
                                right: 25px;
                                padding-left: 5px;
                                border-bottom-left-radius: 3px;
                                border-top-left-radius: 3px; ">
                        </form>
                    </div>
                    <!--                            // show all members NOT in the project: done -->
                    <div class="section-pane">
                        <div class="pane-content">
                            <span class='content-header' style='width: 18px;'>  </span> <span class='content-header'
                                                                                              style='width: 45%;'> Name </span>
                            <span class='content-header' style='width: 22%;'> Affiliation </span> <span
                                    class='content-header' style='width: ;'> Role </span>
                            <!--                            <span class='content-header' style='width: ;'> ID </span>-->

                            <?php

                            $stmt2 = $pdo->prepare("

SELECT id_user, name_first, name_last, affiliation, email 
FROM user 
WHERE id_user NOT IN (
SELECT id_user
FROM project_user
WHERE id_project = $id_project )
");
                            $stmt2->execute();
                            $result2 = $stmt2->fetchAll();

                            foreach ($result2 as $row2) {
                                $name_first = $row2['name_first'];
                                $name_last = $row2['name_last'];
                                $affiliation = $row2['affiliation'];
                                $id_user = $row2['id_user'];
                                $email = $row2['email'];
                                ?>

                                <!--                                           id='--><?php //echo $id_user; ?><!--'-->
                                <div class='content-item-wrap'>
                                    <input class='content-header'
                                           style='margin: 6px 0 0 0; ; width: 18px; '
                                           type='checkbox'
                                           name='memberAddCheck[]'
                                           value='<?php echo $id_user; ?>'
                                           onclick='loadMemberAddCheck()'>
                                    <div class='content-item' style='width: 45%' data-toggle="tooltip"
                                         title="<?php echo $email . '; ID: ' . $id_user; ?>"> <?php echo $name_first, ' ', $name_last; ?></div>
                                    <div class='content-item' style='width: 20%'> <?php echo $affiliation; ?></div>
                                    <select class="content-item" name="role_member_add[]" id="role_member_add"
                                            style="width: 25%" required="required">
                                        <option value="lead" id="lead"> Lead</option>
                                        <option value="member" id="member" selected> Member</option>
                                        <option value="guest" id="guest"> Guest</option>
                                    </select>
                                    <!--                                    <div class='content-item' style='width: '> -->
                                    <?php //echo $id_user; ?><!--</div>-->
                                    <!--                                            </div>-->
                                </div>
                                <?php
                            }
                            ?>
                            <br>

                            <input name="id_project" id="id_project_member_add" value="<?php echo $id_project; ?>"
                                   hidden>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn"
                            style=" display: ; margin: 10px 0 1px 1px "
                            id="submitMemberAdd" name="submitMemberAdd" value="submitMemberAdd" data-dismiss="modal">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ##### end of Add Member Modal ##### -->


<!-- ##### The Add Task Modal ##### -->

<?php
//echo "id_project: " . $id_project;
?>


<div class="modal fade" id="taskAddModal">
    <!-- Task Modal dialog-->
    <div class="modal-dialog" style="height: 750px">
        <div class="modal-content">
            <!-- ### Begin Add TASK FORM in task Modal ### -->
            <!--                    <input type="text" id="id_project" name="id_project" value="">-->
            <form id="taskAddForm">
                <div class="modal-header">
                    <h4 class="modal-title"> New Task </h4>
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                </div>

                <div class="modal-body">

                    <!-- ### generate token for TASK form ### -->
                    <?php
                    //                                $postedToken = $_POST['token'];
                    // prevent resubmission source: https://stackoverflow.com/questions/4614052/how-to-prevent-multiple-form-submission-on-multiple-clicks-in-php

                    function getToken()
                    {
                        $token = sha1(mt_rand());
                        if (!isset($_SESSION['tokens'])) {
                            $_SESSION['tokens'] = array($token => 1);
                        } else {
                            $_SESSION['tokens'][$token] = 1;
                        }
                        return $token;
                    }

                    ?>
                    <!-- ### End of token TASK PHP ### -->

                    <!-- ### Get a token for the form we're displaying ### -->
                    <?php
                    $token = getToken();
                    ?>

                    <input type="hidden" name="token" id="token" value="<?php echo $token; ?>"/> <input type="hidden"
                                                                                                        name="created_by"
                                                                                                        id="created_by"
                                                                                                        value="<?php echo $uid_hbdi ?>">
                    <?php //echo $uid_hbdi; ?>
                    <div class="form-group">
                        <input type="text" name="title_task" id="title_task"
                               placeholder="Task title... "
                               class="form-control"
                               required>
                    </div>

                    <div class="form-group">
                        <label style="margin: 5px 0 0 0; color: darkgrey"> Task due date </label> <input type="date"
                                                                                                         name="date_due"
                                                                                                         id="date_due"
                                                                                                         min="2015-01-01"
                                                                                                         max="2050-12-31"
                                                                                                         class="form-control"
                                                                                                         required>
                    </div>
                    <!-- TODO: this date-picker is HTML5 and need to replace with Bootstrap or JQuery datetimepicker -->

                    <div class="form-group">
                        <div style="display: inline-block; ">

                            <label style="margin: 5px 0 0 0; color: darkgrey; display: block"> Assign task to </label>

                            <?php
                            echo "<select name='assigned_to' id='assigned_to' style='width: 150px; height: 35px; display: inline' required>
                                        <option selected='selected' disabled hidden> Task Owner </option> ";

                            //                            $id_project = $_POST['id-project'];
                            //                            if (isset($id_project)) {
                            $stmt = $pdo->query("SELECT id_user FROM project_user WHERE id_project = '$id_project'");
                            while ($row = $stmt->fetch()) {

                                $id_user = $row['id_user'];

// TO:DO => done. id can show multiple but with names will show only one user
                                $stmt2 = $pdo->query("SELECT DISTINCT name_first, name_last FROM user WHERE id_user = '$id_user'");
                                $row2 = $stmt2->fetch();
                                $name_first = $row2['name_first'];
                                $name_last = $row2['name_last'];
//                                if (isset($name_last)) {
                                echo "<option value=$id_user style='height:'>" . $name_first . " " . $name_last . "</option>";
//                                }
                            }
                            echo "</select>";
                            //                            }
                            ?>
                        </div>

                        <div style="width: ; display: inline-block; float: right">
                            <label style="margin: 5px 0 0 0; color: darkgrey; display: block"> Priority </label> <select
                                    name="priority" id="priority"
                                    style="height: 35px; width: 150px ; float: right; margin-top: 0" required>
                                <option selected="selected" disabled hidden> Priority</option>
                                <option value="TOP" id="1"> Top</option>
                                <option value="High" id="2"> High</option>
                                <option value="Medium" id="3"> Medium</option>
                                <option value="Low" id="4"> Low</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <input name="taskDescription"
                               id="taskDescription"
                               placeholder="Task description"
                               style="margin-bottom: 10px"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <input name="remark" id="remark" placeholder="Remark"
                               class="form-control">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="submitTaskAdd" value="submitTaskAdd" id="submitTaskAdd"
                            data-dismiss="modal"
                            class="btn"> UPDATE
                    </button>
                </div>
                <input type="hidden" name="id_project" id="id_project_task_add" value="<?php echo $id_project ?>">
            </form>
        </div>
        <!-- end of modal content-->
    </div>
    <!-- end of modal dialog -->
</div>
<script>
    $(document).ready(function () {
        $('#submitTaskAdd').on('hidden', function () {
            $(':input', this).val('');
        });
    });
</script>

<!-- ##### end of task Add Modal ##### -->


<?php
//include_once("../../scripts/modals.php");
include("$_SERVER[DOCUMENT_ROOT]/hbdi/scripts/modals.php"); // #### modals

?>
