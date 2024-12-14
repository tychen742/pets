<?php
include './includes/headers.php';
?>

<head>
    <style>
        a:link, a:hover {
            text-decoration: none;
        }
    </style>
</head>

<div class="container">
    <?php
    // ########## LISTING PROJECTS ############
    if (!empty($username_pomodoro)) {
//        echo '<div class="row">';
//        echo '<div class="col-md-2">Project<a href="./project/project_add.php">+</a> </h4> ';
//        echo '</div>';
//        echo '<div class="col-md-6">Task</div>';
//        echo '<div class="col-md-3">Status-header</div>';
//        echo '</div>';
        $stmt = $pdo->query("SELECT title_project, owner, id_project FROM projects WHERE creator = '$userid_pomodoro' ORDER BY title_project");
        $results = $stmt->fetchAll();

        echo '<div class="row">';
        foreach ($results as $row) {
            echo '<div class="column">';
            echo '<div class="card">';

            echo $row['title_project'];
            echo "<a href='./task/task_add.php?id_project=" . $row['id_project'] . "&title_project=" . $row['title_project'] . "'> +Task </a>";
            echo "<a href='./project/project_update.php?id_project=" . $row['id_project'] . "'> Update </a >";
            echo "<a href='./project/project_delete.php?id_project=" . $row['id_project'] . "'> Delete </a><br>";

//            echo "</div>"; // end of column 1

            $sql2 = "SELECT title_task, id_task, id_project FROM tasks WHERE id_project = $row[id_project] ORDER BY title_task";
            $stmt2 = $pdo->query($sql2);
            $results2 = $stmt2->fetchAll();

            foreach ($results2 as $row2) {

//                echo ' <div class="" > '; // begin of column 2
                echo ' <div class="checkbox" style="display: inline">' . $row2['title_task'] . '</div> ';
                echo ' <a href="./task/task_update.php?id_task=' . $row2['id_task'] . '"> Update </a> ';
                echo ' <a href="./task/task_delete.php?id_task=' . $row2['id_task'] . '"> Delete</a>  ';
//                echo ' </div>'; // end of column 2
                echo '<div class="">Status Col</div>'; // begin and end of column 3

            }
            echo '</div>'; // end of card
            echo '</div>'; // end of column
        }
        echo '</div>'; // end of row
    } else {
        echo "Home page";
    }
    ?>
</div> <!-- end of container-fluid -->

