<?php
include_once '../includes/headers.php';
?>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
            <?php

            ?>


            <h2>Adding project...</h2>

            <?php
            $project_title = $_POST['project_title'];
            // You want to find problem first, so empty first.
            if (EMPTY($project_title)) {
                echo "Project title can not be empty." . '<br>';
            } else {
                $project_title = validate_input($project_title);
                $time_created=time();

                try {
                    $sql = "INSERT INTO projects (title_project, creator,  time_created) VALUES ('$project_title', '$userid_pomodoro', '$time_created')";
                    $stmt = $pdo->prepare($sql);
                    $result = $stmt->execute();

                    if ($result = TRUE) {
                        echo "Project added successfully. " . '<br>';
                        echo '<meta http-equiv=REFRESH CONTENT=3;url=../index.php>';
                    } else {
                        echo "Error(s) occurred. Please try again.";
                        // echo '<meta http-equiv=REFRESH CONTENT=5;url=add_project.php>';
                    }
                } catch (PDOException $e) {
                    echo "Error(s) occured. Project is not added. ";
                    echo $sql . "<br>" . $e->getMessage();
                }
            }
            ?>

            <!-- ////// Back Home ////// -->
            <?php
            // echo '<a class="btn btn-success" href="task_add.php">Home</a>';
            ?>

            <br>
            <button class="btn btn-warning" href="index.php">Home</button>
            <!-- ////// Add Project ////// -->
            &nbsp;
            <button class="btn btn-warning" href='project_add.php'>Add project
            </button>
        </div>
    </div>
    <div class="col-sm-3></div></div>
	</div>
	</div>
</body>
</html>