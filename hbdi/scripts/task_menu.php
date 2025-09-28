
<?php
include_once("../includes/topnav.php");

error_log('task_menu.php is loaded.', 0);
//$previous_url = $_GET['previous_url'];
//$id_project = $_POST['id_project'];
//$created_by = $_POST['created_by'];
//$submitTaskAdd = $_POST['submitTaskAdd'];

//error_log("ID of Project is: $id_project", 0);
//error_log("ID of Creator is: $created_by", 0);
//error_log("submitTaskAdd: $submitTaskAdd", 0);
//error_log("test", 0);

if ((isset($_POST['created_by']))) {
    error_log("checking from taskMenu.js", 0);
}
// ##### Add Task #####
//if ((isset($_POST['submitTaskAdd'])) && ($_POST['submitTaskAdd'] == 'submitTaskAdd')) {
if ((isset($_POST['submitTaskAdd']))) {
    error_log('taskAdd in task_menu.php is loaded.', 0);
//    TODO: need to add the token validation and filter_input back; plus PDO prepare stmt for security
//    function isTokenValid($token)
////    {
//        if (!empty($_SESSION['tokens'][$token])) {
//            unset($_SESSION['tokens'][$token]);
//            return true;
//        }
//        return false;
//    }

// if form sent, do SQL
//    if (isset($_POST['submitTaskForm'])) {
//        $postedToken = filter_input(INPUT_POST, 'token');
//        if (!empty($postedToken)) {
//            if (isTokenValid($postedToken)) {
    // Process form
    $created_by = $_POST['created_by'];
    error_log("1. Task creator: $created_by", 0);
    $title_task = $_POST['title_task'];
    error_log("2. Task title: $title_task", 0);
    $assigned_to = (isset($_POST['assigned_to'])) ? $_POST['assigned_to'] : 0;
    error_log("3. Task assigned to (owner): $assigned_to", 0);
    $date_assigned = time();
    error_log("4. Task creator: time assigned: $date_assigned", 0);
    $date_due = $_POST['date_due'];
    error_log("5. Task due: $date_due", 0);
    $date_due = strtotime($date_due);
    error_log("6. Task due: $date_due", 0);
    $taskDescription = $_POST['taskDescription'];
    error_log("7. Task description: $taskDescription", 0);
    $remark = $_POST['remark'];
    error_log("8. Task remark: $remark", 0);
    $id_project = $_POST['id_project'];
    error_log("9. id project: $id_project", 0);
    $priority = $_POST['priority'];
    error_log("10. Task priority: $priority", 0);

    try {
        $stmt = $pdo->prepare("
INSERT INTO task (created_by, title_task, assigned_to, time_assigned, date_due, taskDescription, remark, id_project, priority) 
VALUES ('$created_by', '$title_task', '$assigned_to', '$date_assigned', '$date_due', '$taskDescription', '$remark', '$id_project', '$priority') ");
        $stmt->execute();
    } catch (PDOException $exception) {
        echo $exception->getMessage();
        error_log("Error inserting task info into DB.", 0);
    }
} else {
    echo "Error(s) when Adding the Task";
//            }
//        }
//    }
}
//            echo "<meta http-equiv=REFRESH CONTENT=1;url=$p/projects/" . $username_hbdi . "/" . $title_project_short . ".php>";
// ##### end Add Task #####


// ##### 1. Acknowledge
if (isset($_POST['submitTaskAcknowledge'])) {
    if (!isset($_POST['taskCheck'])) {
        echo "AAAAAAAAA";
    }
    $taskChecked = $_POST['id'];
    $timestamp = time();
    $date_acknowledged = date('Y-m-d H:i:s', $timestamp);
    foreach ($taskChecked as $id_task) {

        try {
            $stmt = $pdo->prepare(" UPDATE task SET status = 'ACK', date_acknowledged = '$timestamp' WHERE id_task = $id_task ");
            $stmt->execute();
            error_log("task_menu.php Acknowledged Task ID: $id_task", 0);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "OOPS Acknowledge!";
        }
    }
}

// ##### 2. Working
//if ((isset($_POST['submitTaskWorking'])) && ($_POST['submitTaskWorking'] == "submitTaskWorking")) {
if (isset($_POST['submitTaskWorking']))  {
    if (!isset($_POST['taskCheck'])) {
        error_log("submitTaskWorking taskCheck not posted");
    }
    $taskChecked = $_POST['id'];
//    TODO: taskChecked is an array ==> use a while loop to do multiple WOI
    error_log("submitTaskWorking: $taskChecked");
    $timestamp = time();
    $date_begin = date('Y-m-d H:i:s', $timestamp);
    $taskChecked = $_POST['id'];
    error_log("task_menu.php submitTaskeWOrking ID: $taskChecked");
    foreach ($taskChecked as $id_task) {
        try {
            $stmt = $pdo->prepare(" UPDATE task SET status = 'WOI', date_begin = '$timestamp' WHERE id_task = '$id_task' ");
            $stmt->execute();
            error_log("task_menu.php Working on Task ID: $id_task", 0);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
}

// ##### 4. Complete
if ((isset($_POST['submitTaskComplete'])) && ($_POST['submitTaskComplete'] == 'submitTaskComplete')) {
    if (!isset($_POST['taskCheck'])) {
        echo "AAAAAAAAA";
    }
    $timestamp = time();
    $time_completed = date('Y-m-d H:i:s', $timestamp);
    $taskChecked = $_POST['id'];
    foreach ($taskChecked as $id_task) {
        try {
            $stmt = $pdo->prepare(" UPDATE task SET status = 'DONE', time_completed = '$timestamp' WHERE id_task = $id_task ");
            $stmt->execute();
            error_log("task_menu.php Completed Task ID: $id_task", 0);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "OOPS Done!";
        }
    }
}

// ##### 5. Verify
if ((isset($_POST['submitTaskVerify']))) {
    if (!isset($_POST['taskCheck'])) {
        echo "AAAAAAAAA";
    }
    $timestamp = time();
    $time_verified = date('Y-m-d H:i:s', $timestamp);
    $taskChecked = $_POST['id'];
    foreach ($taskChecked as $id_task) {
        try {
            $stmt = $pdo->prepare(" UPDATE task SET status = 'VFY', time_verified = '$timestamp' WHERE id_task = $id_task ");
            $stmt->execute();
            error_log("Verified task: $id_task", 0);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "OOPS Verify!";
        }
    }
}


// ##### 6. Archive
if ((isset($_POST['submitTaskArchive'])) && ($_POST['submitTaskArchive'] == "submitTaskArchive")) {
    if (!isset($_POST['taskCheck'])) {
        echo "AAAAAAAAA";
    }
    $taskChecked = $_POST['id'];
    foreach ($taskChecked as $id_task) {
        try {
            $stmt = $pdo->prepare(" UPDATE task SET status = 'ARC' WHERE id_task = $id_task ");
            $stmt->execute();
            error_log("Archived $id_task", 0);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "OOPS Archive!";
        }
    }
}


// ##### 7. Delete task
if (isset($_POST['submitTaskDelete'])) {
    if ($_POST['submitTaskDelete'] == "submitTaskDelete") {
        error_log('task_menu.php Delete is run.', 0);
        if (!isset($_POST['id'])) {
            error_log('the id array is empty.', 0);
        } else {
            $taskChecked = $_POST['id'];
            error_log("task_menu.php saved id from GET: $taskChecked[0]", 0);

            foreach ($taskChecked as $id_task) {
                error_log("the id is $id_task", 0);
                try {
                    $stmt = $pdo->prepare(" DELETE FROM task WHERE (id_task = $id_task ) ");
                    $stmt->execute();
                    echo "SUCCESS";
                } catch (PDOException $exception) {
                    echo $exception->getMessage();
                    echo "OOPS Delete error!";
                }
            }
        }
    } else {
        error_log('task_menu did not get values from taskMenu.js', 0);
    }
}


//try {
//    $sql = " SELECT title_project_short FROM projects WHERE id_project = '$id_project' ";
//    $stmt = $pdo->query($sql);
//    while ($row = $stmt->fetch()) {
//        $title_project_short = $row['title_project_short'];
//    }
//} catch (PDOException $exception) {
//    echo $exception->getMessage();
//}

error_log("leaving task_menu.php", 0);
//
//if (isset($previous_url)) {
//    echo "<meta http-equiv=REFRESH CONTENT=5;url=$previous_url>";
//} else {
//    echo "<meta http-equiv=REFRESH CONTENT=5;url=$p/projects/$username_hbdi/$title_project_short.php>";
//}


?>