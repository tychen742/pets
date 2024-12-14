<?php
include '../includes/headers.php';
?>

<?php
$id = null;
if (!empty($_GET['id_task'])) {
    $id_task = $_REQUEST['id_task'];
    // echo $id_task;
}

// ############################ SHOW MESSAGE ###########################
try {
    $message = NULL;
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $title_task = getSingleValue(title_task, task, id_task, $id_task);
    if (!empty($title_task)) {
        // echo $title_task;
    } else {
        echo '/$title_task is empty. ';
    }

    // echo 'something';
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

// if (! empty($_GET['message'])) {
// $message = $_REQUEST['message'];
// echo "test";
// }

if (null == $id_task) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- ########################  STYLE ###################################-->
    <link rel="stylesheet" type="text/css" href="../../styles/pomodoro.css">

</head>

<body>
<!-- https://www.startutorial.com/articles/all -->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
            <div>
                <h3>Update task</h3>
            </div>

            <form name="form" class="form-horizontal"
                  action="task_update_process.php" method="post">
                <input type="hidden" name="id_task" value="<?php echo $id_task; ?>"/>
                <textarea id="title_task_id" name="title_taskNew"
                          placeholder="<?php echo $title_task; ?>" type="text"><?php echo $title_task; ?></textarea>

                <div class="form-actions">
                    <button type="submit" class="btn btn-warning">Update</button>
                    <button class="btn btn-warning" onclick="location.href='index.php' ">Home</button>
                </div>
            </form>

        </div>
        <div class="col-sm-3></div></div>
		</div>
	</div>

</body>
</html>