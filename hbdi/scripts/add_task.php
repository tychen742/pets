<?php

// ##### moved to task_menu.php

//include_once("../includes/topnav.php");
//
//
//// check token
//function isTokenValid($token)
//{
//    if (!empty($_SESSION['tokens'][$token])) {
//        unset($_SESSION['tokens'][$token]);
//        return true;
//    }
//    return false;
//}
//
//// if form sent, do SQL
//if (isset($_POST['submitTaskForm'])) {
//    $postedToken = filter_input(INPUT_POST, 'token');
//    if (!empty($postedToken)) {
//        if (isTokenValid($postedToken)) {
//            // Process form
//            $created_by = $_POST['created_by'];
//            $title_task = $_POST['title_task'];
//            $assigned_to = (isset($_POST['assigned_to'])) ? $_POST['assigned_to'] : 0 ;
//            $date_assigned = time();
//            $date_due = $_POST['date_due'];
//            $date_due = strtotime($date_due);
//            $taskDescription = $_POST['taskDescription'];
//            $remark = $_POST['remark'];
//            $id_project = $_POST['id_project'];
//            $priority = $_POST['priority'];
//
//
//            $stmt = $pdo->prepare("
//INSERT INTO task (created_by, title_task, assigned_to, time_assigned, date_due, taskDescription, remark, id_project, priority)
//VALUES ('$uid_hbdi', '$title_task', '$assigned_to', '$date_assigned', '$date_due', '$taskDescription', '$remark', '$id_project', '$priority') ");
//            $stmt->execute();
////            echo "<meta http-equiv=REFRESH CONTENT=1;url=$p/projects/" . $username_hbdi . "/" . $title_project_short . ".php>";
//        } else {
//            echo "Do something about the error";
//        }
//    }
//}
//
//
//try {
//    $sql = " SELECT title_project_short FROM projects WHERE id_project = $id_project ";
//    $stmt = $pdo->query($sql);
//    while ($row = $stmt->fetch()) {
//        $title_project_short = $row['title_project_short'];
//    }
////    echo "title-short-project: " . $title_project_short;
//} catch (PDOException $exception) {
//    echo $exception->getMessage();
//}
//
//echo "<meta http-equiv=REFRESH CONTENT=0;url=$p/projects/$username_hbdi/$title_project_short.php>";
