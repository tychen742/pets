<?php
include 'includes/session.php';
require 'includes/database.php';


$id_note = null;
if (!empty($_GET['id_get'])) {
    $id_note = $_REQUEST['id_get'];
}

// ############################ SHOW MESSAGE ###########################
try {
    $note = NULL;
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    include 'includes/functions.php';
    $note = getSingleValue(text, content, id_note, $id_note);
    // echo $singleValue;
} catch (PDOException $ex) {
    echo $ex->getMessage();
}


if (null == $id_note) {
    header("Location: index.php");
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
    <link rel="stylesheet" type="text/css" href="../styles/notes.css">

</head>

<body>
<!-- https://www.startutorial.com/articles/all -->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
            <?php include 'includes/greeting.php'; ?>

            <div>
                <h1>update note</h1>
            </div>

            <FORM name="form" class="form-horizontal" action="update_process.php" method="POST">
                <input type="hidden" name="id_note" value="<?php echo $id_note; ?>"/>
                <textarea id="note_update_area" name="note_updated"
                          placeholder="<?php echo $note; ?>" type="text"><?php echo $note; ?></textarea>

                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a class="btn" href="index.php">Back</a>
                </div>
            </FORM>

        </div>
        <div class="col-sm-3></div></div>
		</div>
	</div>

</body>
</html>