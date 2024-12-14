<?php

function deleteSingleValue($columnName, $tableName, $prop, $value)
{
    try {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $pdo->query("DELETE `$columnName` FROM `$tableName` WHERE $prop='" . $value . "'");
        $stmt = $query->fetch();
        // $result = $stmt[$columnName];
        // return $result;
    } catch (Exception $e) {
        echo $e;
        echo "oops! there's an error! ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
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

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-7">
				<h1>deleting a project</h1>
				Are you sure you want to delete project <?php echo $title_project;?>?
					
						<input type="submit" class="btn btn-danger" name="submit">Delete</button>
				<a class="btn btn-success" href="../index.php">Home</a>
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