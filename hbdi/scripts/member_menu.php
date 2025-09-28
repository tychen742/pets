<?php
include_once('../includes/topnav.php');

error_log("member_menu.php loaded.", 0);


// ##### add member #####
if (isset($_POST['submitMemberAdd'])) {

    error_log("add member reached", 0);

    $id_project = $_POST['id_project'];
//    $memberAddChecked = $_POST['memberAddCheck'];
    $memberAddChecked = $_POST['id'];
    $role_member_add = $_POST['role_member_add'];

    foreach ($memberAddChecked as $index => $id_user) {
        try {
            $sql = " INSERT INTO project_user (id_project, id_user, role) VALUES ($id_project, $id_user, '$role_member_add[$index]') ";
            $pdo->exec($sql);
            error_log("insert_member.php successful", 0);

        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}


// ##### remove member #####
//if ((isset($_POST['submitMemberRemove'])) && ($_POST['submitMemberRemove'] == 'submitMemberRemove')) {
if (isset($_POST['submitMemberRemove'])) {
    $id_project = $_POST['id_project'];

//    $memberMenuChecked = $_GET['memberMenuCheck'];
    error_log("remove member reached", 0);

    $memberMenuChecked = ($_POST['id']) ? $_POST['id'] : null;

    if (!isset($memberMenuChecked)) {
        error_log("member remove problems.....", 0);
    }
//    else {
//        error_log("ids are here. $memberMenuChecked[0]", 0);
//    }

    foreach ($memberMenuChecked as $id_user) {
        error_log("the id is $id_user", 0);
        try {
            $stmt = $pdo->prepare(" DELETE FROM project_user WHERE (id_user = $id_user AND id_project = $id_project) ");
//            $stmt = $pdo->prepare(" DELETE FROM project_user WHERE (id_user = $id_user ");
            $stmt->execute();
            error_log("remove member successful", 0);

        } catch (PDOException $exception) {
            echo $exception->getMessage();
            echo "OOPS!";
        }
    }
}


// ##### go back to Project #####
//try {
//    $sql = " SELECT title_project_short FROM projects WHERE id_project = '$id_project' ";
//    $stmt = $pdo->query($sql);
//    while ($row = $stmt->fetch()) {
//        $title_project_short = $row['title_project_short'];
//    }
//} catch (PDOException $exception) {
//    echo $exception->getMessage();
//}
//
//echo "<meta http-equiv=REFRESH CONTENT=0;url=$p/projects/$username_hbdi/$title_project_short.php>";

?>


