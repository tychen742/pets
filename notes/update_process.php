<?php
include 'includes/session.php';
include_once 'includes/database.php';
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

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">

            <?php
            include 'includes/greeting.php';
            // echo $_POST['messageNew'];
            $note_updated = $_POST['note_updated'];

            if (empty($_POST['id_note'])) {
                echo "id_note is empty.";
                echo '<meta http-equiv="Refresh" content="1; url=index.php">';

            } else {
                $id_note = $_POST['id_note'];
            }

            if (empty($note_updated)) {
                // echo "........";
                $updateError = 'Please enter your note.';
                echo $updateError;
                // $valid = false
            } else {

                $pdo = Database::connect();
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // $sql = "UPDATE customers set name = ?, email = ?, mobile =? WHERE id = ?";
                $sql = "UPDATE content SET text = ? WHERE id_note = ?";
                $query = $pdo->prepare($sql);
                $query->execute(array(
                    $note_updated,
                    $id_note
                ));

                // echo "processed";
                Database::disconnect();
                echo '<br><h1>updating note...</h1>';
                echo '<meta http-equiv="Refresh" content="1; url=index.php">';

//                header("Location: index.php");
            }
            ?>

            <a class="btn" href="index.php">Back</a>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</div>
</body>
</html>
