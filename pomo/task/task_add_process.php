<?php include '../includes/headers.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">

            <h3>Adding task</h3>
            <?php
            $id_project = validate_input($_POST['id_project']);
            $title_project = validate_input($_POST['title_project']);
            $title_task = validate_input($_POST['title_task']);

            if (empty($userid_pomodoro)) {
                echo "Please log in.";
            } elseif (empty($id_project)) {
                echo "Project id is empty. <br>";
            } elseif (empty($title_project)) {
                echo "Project title is empty. <br>";
            } elseif (empty($title_task)) {
                echo "Task title can not be empty." . '<br>';
            } else {
                echo "user logged in and project id, project title, task title are present";
            }

            ?>

            <?php

            ?>

            <?php
            $time_created = time();
            // find the project id (id_project) from $_POST['project_title'] and assign as id_project
            try {
                $sql = "INSERT INTO tasks (title_task, id_project, id_creator, time_created) VALUES ('$title_task', '$id_project', '$userid_pomodoro', '$time_created' )";
                $stmt = $pdo->prepare($sql);
                $result = $stmt->execute();

                if ($result = TRUE) {
                    echo "Task added successfully. Redirecting home.";
                    echo '<meta http-equiv=REFRESH CONTENT=5;url=../index.php>';
                } else {
                    echo "Error(s) occurred. Please try again.";
                    echo '<meta http-equiv=REFRESH CONTENT=5;url=add_project.php>';
                }
            } catch (PDOException $e) {
                echo "Error(s) occured. Task is not added. ";
                echo $sql . "<br>" . $e->getMessage();
            }


            // header("refresh:3;url=add_project.php");
            // echo '<meta http-equiv=REFRESH CONTENT=0;url=project_add.php>';

            // https://stackoverflow.com/questions/16812733/populating-dropdown-menu-through-pdo-code
            ?>

            <!-- ////// Back Home ////// -->
            <br> <br>
            <button class="btn btn-warning" type="button" onclick="location.href='index.php';"
                    value="Home">Home
            </button>
            <button class="btn btn-warning" type="button" onclick="location.href='task_add.php';"
                    value="Add task">Add task
            </button>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>