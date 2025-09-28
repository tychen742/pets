<script defer src="https://tychen.us/hbdi/scripts/fileMenu.js"></script>

<?php
include_once('includes/topnav.php');
include_once("./scripts/utilities.php"); // #### facebook_time
include_once("./scripts/modals.php"); // #### modals
?>

<!-- Container -->
<div class="container-fluid" style="width: 90%; max-width: 1300px;">

    <!-- Datasets & Files Header: title  -->
    <!--   Section: Datasets & Files  -->
    <div class="section-wrap-long">
        <div class="page-title">
            <span style=""> Files </span>
        </div>
        <!-- end of dashboard header: New project, title & search-->
    </div>

    <div class="section-wrap-long">
        <div class="section-pane">
            <div class="pane-header">
                <ul class="nav nav-tabs " id="tabContent" style="display: inline-block;">
                    <div style="display: inline-block" data-toggle="tooltip" data-placement="top"
                         title="Show all files">
                        <li class="active title" style="padding-top: 2px"><a href="#" data-toggle="tab"> All files </a></li>
                        |
                    </div>
                    <div style="display: inline-block" data-toggle="tooltip" data-placement="top"
                         title="Show quantitative or qualitative datasets">
                        <li class=" title" style="padding-top: 2px; color: #915664; font-weight: 400"><a href="#" data-toggle="tab"> Datasets </a>
                        </li>
                        |
                    </div>
                    <div style="display: inline-block" data-toggle="tooltip" data-placement="top"
                         title="Show working papers, drafts, manuscripts, & preprints">
                        <li class="title" style="padding-top: 2px; color: #915664; font-weight: 400"><a href="#" data-toggle="tab"> Documents </a>
                        </li>
                        |
                    </div>
                    <div style="display: inline-block">
                        <i class="fas fa-plus-circle" data-toggle="tooltip" data-placement="top" title="Add a new file category"
                           style="color: grey; font-size: 1em"></i>
                    </div>

                    <div style="display: inline; color: grey; font-size: 1em;"
                         data-toggle="tooltip" data-placement="top" title="Upload a new file">
                        <i data-toggle="modal" data-target="#fileModalUploadXXXXX" style="color: lightgrey"
                           class="fas fa-cloud-upload-alt">
                        </i>
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

                            margin: 0 0 0 25px">
                        <!--                               onkeyup="showResult(this.value)" ;-->
                        <input type="text" placeholder=" Search/filter files..."
                               style="
                                                border: 1px solid #8a6d3b;
                                                height: ;
                                                border-radius: 2px;
                                /*margin-bottom: 3px;*/
                                /*margin: 2px 0 2px 0!important;*/
                                 width: 125px;
                                padding: 2px 0 0 5px;
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
                                width: 35px;
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
                <!-- ### actions ### -->
                <!--                <span style="display: none; color: dimgrey; margin-left: 5px; text-decoration: none;" id="fileMenu">-->
                <!--                        <a href="#">Download</a> | <a href="#">Load (Scratch Dr.)</a>  | <a href="#"> Move </a> | <a href="#"> Annotate </a> |<a href="#"> Archive </a> | <a-->
                <!--                            href="#"> Delete </a>-->
                <!--                    </span>-->
                <div style="display: none; color: dimgrey; margin-left: 5px; text-decoration: none;" id="fileMenu">
                    <button style="color: #782f40; background-color: transparent; display: inline; padding: 0" href="#">Download</button> |
                    <button style="color: #782f40; background-color: transparent; display: inline; padding: 0" href="#">Load (VM)</button> |
                    <button style="color: #782f40; background-color: transparent; display: inline; padding: 0" href="#"> Move </button> |
                    <button style="color: #782f40; background-color: transparent; display: inline; padding: 0" href="#"> Annotate </button> |
                    <button style="color: #782f40; background-color: transparent; display: inline; padding: 0" href="#"> Archive </button> |
                    <button type="submit" name="submitFileDelete" value="submitFileDelete" id="fileDelete"
                            style="display: inline; background-color: transparent; color: #782f40; font-weight: 400; border: 0; padding: 0; margin: 0">
                        Delete
                    </button>
                </div>
            </div>
            <!-- ### end of pane header ### -->
            <div class="pane-content">
                <!--                <form style='display: inline' action='file/do_something.php' method='POST' target='_blank'>-->
                <div>
                    <div class='content-header'
                         style='margin: 7px 2px 0 0; width: 15px;'
                         type='checkbox'
                         name='fileCheck'
                         id='$id_file'
                         value='$id_file'
                         onclick='loadFileMenu()'></div>
                    <!--                    <div class="content-header" style='width: 5%;'> PID</div>-->
                    <div class="content-header" style='width: 5%;'> FID</div>
                    <div class="content-header" style='width: 40%'> Filename</div>
                    <div class="content-header" style='width: 30%;'> Compliance</div>
                    <div class="content-header" style='width: 15%'> Uploaded</div>
                    <div class="content-header" style=''> Status</div>
                </div>

                <div id="fileList">
                    <?php
                    try {
                        $result = $pdo->query("
 SELECT DISTINCT id_project FROM project_user WHERE id_user = '$uid_hbdi' ");

                        foreach ($result AS $row) {
                            $id_project = $row['id_project'];
                            // ### path
                            $project_path = $pdo->query("SELECT title_project, title_project_short, id_creator FROM projects WHERE id_project = '$id_project'")->fetch();
                            $title_project = $project_path['title_project'];
                            $title_project_short = $project_path['title_project_short'];
                            $id_creator = $project_path['id_creator'];
                            // ### username
                            $project_creator = $pdo->query(" SELECT username FROM user WHERE id_user = '$id_creator'")->fetch();
                            $username_project_creator = $project_creator['username'];
                            echo "<div class='content-title'><a href='$p/projects/$username_project_creator/$title_project_short.php'>$title_project_short: $title_project </a></div>";

                            // each file
                            try {
//                                TODO: make sure the file is in the directory
                                $stmt = $pdo->prepare(" SELECT id_file, name_file,  date_uploaded, id_project FROM files WHERE ((id_project = '$id_project') AND (date_deleted IS NULL) ) ORDER BY id_file DESC");
                                $stmt->execute();
                                $result = $stmt->fetchAll();

                                foreach ($result AS $row) {
                                    $id_file = $row['id_file'];
                                    $filename = $row['name_file'];
                                    $date_uploaded = $row['date_uploaded'];
                                    $datetime_uploaded = date("Y-m-d H:i:s", $date_uploaded);
                                    $date_uploaded = facebook_time_ago($datetime_uploaded);

                                    $id_project = $row['id_project'];

                                    $compliance = "";
                                    $permission = $pdo->query(" SELECT permission FROM permission_store WHERE id_file = '$id_file' ")->fetchAll();
                                    foreach ($permission as $compliance_data) {
                                        $compliance .= $compliance_data['permission'] . ' ';
                                    }
                                    $compliance = ($compliance) ? $compliance : null;

                                    echo
                                    "<div class='content-item-wrap'>
                                <input class='content-item' style='margin: 3px 2px 0 0; width: 15px;' type='checkbox' name='fileCheck[]' id='$id_file' value='$id_file' onclick='loadFileMenu()'>
                                <div class='content-item' style='width: 5%'> $id_file </div>
                                <div class='content-item' style='width: 40%'> $filename </div> 
                                <div class='content-item' style='width: 30%' data-toggle='tooltip' title='$compliance'> $compliance </div> 
                                <div class='content-item' style='width: 15%' data-toggle='tooltip' title='$datetime_uploaded'>$date_uploaded </div>
                                <div class='content-item' style='width: %'> </div>
                                 
                                    </div > ";
                                }

                            } catch
                            (Exception $exception) {
                                echo $exception;
                            }
//
                        }
                    } catch (Exception $exception) {
                        echo $exception;
                    }
                    //                echo " </form > ";
                    ?>
                </div>
            </div>
        </div>
        <!-- end of section Pane --->
    </div>
    <!-- ### end of section wrap -->
</div>
<!-- ##### end of container ##### -->

<?php include_once("./includes/footer.php"); ?>
