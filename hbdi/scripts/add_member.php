<?php
include_once('../includes/topnav.php');

$id_project = $_GET['id_project'];
$memberChecked = $_GET['memberCheck'];
$role = $_GET['role'];

foreach ($memberChecked as $index => $id_user) {

        try {
            $sql = " INSERT INTO project_user (id_project, id_user, role) VALUES ($id_project, $id_user, '$role[$index]') ";
            $pdo->exec($sql);
            error_log("insert_member.php successful", 0);

        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
}

try {
    $sql = " SELECT title_project_short FROM projects WHERE id_project = $id_project ";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        $title_project_short = $row['title_project_short'];
    }
//    echo "title-short-project: " . $title_project_short;
} catch (PDOException $exception) {
    echo $exception->getMessage();
}

echo "<meta http-equiv=REFRESH CONTENT=0;url=$p/projects/$username_hbdi/$title_project_short.php>";

?>
