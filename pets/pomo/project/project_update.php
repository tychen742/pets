<?php
include '../includes/headers.php';
?>

$id = null;
if (! empty($_GET['id_project'])) {
    $id_project = $_REQUEST['id_project'];
    // echo $id_project;
}

// ############################ SHOW MESSAGE ###########################
try {
    $message = NULL;
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    include 'include/functions.php';
    $title_project = getSingleValue(title_project, project, id_project, $id_project);
    if (! empty($title_project)) {
        // echo $title_project;
    } else {
        echo '/$title_project is empty. ';
    }
    
    // echo 'something';
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

// if (! empty($_GET['message'])) {
// $message = $_REQUEST['message'];
// echo "test";
// }

if (null == $id_project) {
    header("Location: index.php");
}

?>


<body>
	<!-- https://www.startutorial.com/articles/all -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-7">
				<div>
					<h3>Update project</h3>
				</div>

				<form name="form" class="form-horizontal"
                      action="project_update_process.php" method="post">
					<input type="hidden" name="id_project"
						value="<?php echo $id_project;?>" />
					<textarea id="title_project_id" name="title_projectNew"
						placeholder="<?php echo $title_project; ?>" type="text"><?php echo $title_project; ?></textarea>

					<div class="form-actions">
						<button type="submit" class="btn btn-warning">Update</button>
						<button class="btn btn-warning" href="index.php">Home	</button>
					</div>
				</form>

			</div>
			<div class="col-sm-3></div></div>
		</div>
	</div>

</body>
</html>