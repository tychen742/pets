<?php
include '../includes/headers.php';
?>
<?php

$id_project = 0;

if (!empty($_GET['id_project'])) { // It's good
    $id_project = $_REQUEST['id_project'];
    // echo "id_project is passed over successfully: " . $id_project . '. ';
} else {
    // echo "id is not passed over.";
}

if (!empty($_POST)) {
    // keep track post values
    try {
        $id_project = $_POST['id_project'];
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM project  WHERE id_project = ?";
        $query = $pdo->prepare($sql);
        $query->execute(array(
            $id_project
        ));
        Database::disconnect();
        header("Location: index.php");
    } catch (Exception $e) {
        echo $e;
    }
}

?>


<body>
<?php
$title_project = getSingleValue(title_project, project, id_project, $id_project);
// echo 'The project title is' . ' ' . $title_project . '.';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
            <h3>delete a project</h3>
            <form class="form-horizontal" action="project_delete.php"
                  method="post">
                <input type="hidden" name="id_project"
                       value="<?php echo $id_project; ?> ">
                <textarea placeholder="<?php echo $title_project; ?>"></textarea>
                <!-- if you leave a space in between >< the placeholder won't show. -->
                <div class="form-actions">
                    <button type="submit" class="btn btn-warning">Delete</button>
                    <button class="btn btn-warning" onclick="location.href='index.php' ">Home</button>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

</div>
<!-- /container -->
</body>
</html>