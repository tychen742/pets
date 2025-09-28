<?php include '../includes/headers.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">

            <?php

            // echo $userid_pomodoro;
            // ######### get project ID ##########
            if (!empty($_GET['id_project'])) { // It's good
                $id_project = $_REQUEST['id_project'];
                $title_project = $_REQUEST['title_project'];
                echo "id_project is passed over successfully: " . $id_project . '. ';
                echo "title_project is passed over successfully: " . $title_project . '. ';
            } else {
                echo "id is not passed over.";
            }

            ?>

            <h3>Add task</h3>
            <FORM method="POST" action="task_add_process.php">

                <div class="form-group">

                    <label>Project: <?php echo $title_project ?> </label><br>
                    <input type="text" name="title_task">
                    <input type="text" name="title_project" value="<?php echo $title_project ?>" hidden>
                    <input type="text" name="id_project" value="<?php echo $id_project ?>" hidden>
                    <button class="btn btn-warning" type="submit" name="submit">Submit</button>
                </div>

                <div class="form-group">
                    <button class="btn btn-warning" type="button"
                            onclick="location.href='index.php' ">Home
                    </button>
                    <button class="btn btn-warning" type="button"
                            onclick="location.href='project_add.php' ">Project
                    </button>

                </div>

            </FORM>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>
