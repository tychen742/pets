<?php
include '../includes/headers.php';

$id_task = 0;

if (! empty($_GET['id_task'])) { // It's good
    $id_task = $_REQUEST['id_task'];
//     echo "id_task is passed over successfully: " . $id_task . '. ';
} else {
    // echo "id is not passed over.";
}

if (! empty($_POST)) {
    // keep track post values
    try {
        $id_task = $_POST['id_task'];
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM task  WHERE id_task = ?";
        $query = $pdo->prepare($sql);
        $query->execute(array(
            $id_task
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
include 'include/functions.php';
$title_task = getSingleValue(title_task, task, id_task, $id_task);
// echo 'The task title is' . ' ' . $title_task . '.';
?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-7">
			    <?php

    ?>
				<h3>Delete a task</h3>
				<form class="form-horizontal" action="task_delete.php" method="post">
					<input type="hidden" name="id_task" value="<?php echo $id_task;?> ">
					<textarea placeholder="<?php echo $title_task; ?>"></textarea>
					<!-- if you leave a space in between >< the placeholder won't show. -->
					<div class="form-actions">
						<button type="submit" class="btn btn-warning">Delete</button>
						<button class="btn btn-warning" href="index.php">Home</button>
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