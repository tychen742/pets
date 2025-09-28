<?php
include_once("../includes/topnav.php");

$id_project = $_GET['id_project'];

if (!isset($_GET['memberMenuCheck'])) {
    echo "AAAAAAAAA";
}
$memberMenuChecked = $_GET['memberMenuCheck'];

foreach ($memberMenuChecked as $id_user) {
    try {
        $stmt = $pdo->prepare(" DELETE FROM project_user WHERE (id_user = '$id_user' AND id_project = '$id_project') ");
        $stmt->execute();
//        echo "SUCCESS";
    } catch (PDOException $exception) {
        echo $exception->getMessage();
        echo "OOPS!";
    }
}

try {
    $sql = " SELECT title_project_short FROM projects WHERE id_project = '$id_project' ";
    $stmt = $pdo->query($sql);
    while ($row = $stmt->fetch()) {
        $title_project_short = $row['title_project_short'];
    }
} catch (PDOException $exception) {
    echo $exception->getMessage();
}

echo "<meta http-equiv=REFRESH CONTENT=0;url=$p/projects/$username_hbdi/$title_project_short.php>";

?>
