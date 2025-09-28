<?php
include 'includes/session.php';
include 'includes/database.php';


if (!empty($_GET['id_get'])) {
    $id_get = $_REQUEST['id_get'];
//    echo   $id_get ;
}

if (!empty($_POST))  {
// keep track post values
    $id_note = $_POST['id_note'];
//    echo 'The POSTED $id_note . "is here." ';

    try {
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM content  WHERE id_note = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array(
            $id_note
        ));
//        echo 'Note deleted';
        Database::disconnect();
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';

//         header("Location: index.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
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
    <link rel="stylesheet" type="text/css" href="../styles/notes.css">
</head>

<body>
<?php
########## get Note Entry VALUE ##########
try {
    include 'includes/functions.php';
    $entry = getSingleValue(text, content, id_note, $id_get);
//    echo $entry;
} catch (PDOException $e) {
    echo $e->getMessage();
}

if (empty($entry)) {
//    echo '$entry is empty.';

}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
            <?php include 'includes/greeting.php'; ?>

            <h1>delete a post</h1>
            <FORM class="form-horizontal" action="delete.php" method="POST">
                <input type="hidden" name="id_note" value="<?php echo $id_get; ?>"/>
                <textarea placeholder="<?php echo $entry; ?>"></textarea>
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>

            </FORM>
            <a class="btn btn-success" href="index.php">Back</a>

        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

</div>
<!-- /container -->
</body>
</html>