<?php
include '../includes/headers.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">

            <!--   ////// HTML FORM ////// -->
            <br><br>
            <h3>Add project</h3>
            <form class="form-inline" method="post"
                  ACTION="project_add_process.php">
                <div class=>
                    <div class="form-group">
                        <!-- <label for="inputdefault">Project title </label>  -->
                        <input id="msg" type="text" class="form-control"
                               name="project_title" placeholder="Type project title">
                        <!--     the name variable will be posted over to action -->
                        <button class="btn btn-warning" type="submit" name="submit"
                                href="project_add_process.php">Submit
                        </button>
                        &nbsp;
                        <button class="btn btn-warning" type="reset">Clear</button>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <br><br>
                        <button class="btn btn-warning" type="button" onclick="location.href='index.php' ">Home</button>
                        <button class="btn btn-warning" type="button" onclick="location.href='task_add.php' ">Task</button>
                    </div>
                </div>
            </FORM>
            <?php
            if (!empty($_SESSION['userid_pomodoro'])) {
                $userid_pomodoro = $_SESSION['userid_pomodoro'];
            } elseif (!empty($username_pomodoro)) {
                echo $username_pomodoro . "'s Existing Projects: " . "<br>";
                try {
                    $sql = "SELECT title_project, id_user FROM project WHERE id_user = $userid_pomodoro ";
                    $stmt = $conn->query($sql);
                    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($results as $row) {
                        echo $row[title_project] . '<br>';
                    }
                } catch (PDOException $e) {
                    echo "Something went wrong in adding the project.";
                    echo $e;
                }
            }
            ?>

        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>