<?php
include 'includes/session.php';
include_once 'includes/database.php';
?>

<?php

if (!empty($userid_notes)) {
    $userid_notes = $_SESSION['userid_notes'];

//    echo '<br> userid is ' . $userid_notes . '<br>';
//    echo 'test <br>';
} else {
    echo "\$userid_notes is empty <br>";
}


try {
    if (!empty($_POST)) {
        // keep track validation errors
        $messageError = null;

        // keep track post values
        $content = $_POST['content'];

        // validate input
        $valid = true;
        if (empty($content)) {
            $contentError = 'Please enter your note.';
            $valid = false;
        }

        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            echo $userid_notes;
            $sql = "INSERT INTO content (text, id_user) VALUES (?, ?)  ";
            $q = $pdo->prepare($sql);
            $q->execute(array(
                $content, $userid_notes
            ));
            Database::disconnect();
//            header("Location: index.php");
//            <meta http-equiv="Refresh" content="2; url=../target.html">
            echo '<meta http-equiv="Refresh" content="1; url=index.php">';
        }
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge" >

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
            <?php include_once 'includes/greeting.php';
            ?>
            <h1>new note </h1>

            <form class="form-horizontal" action="create.php" method="post">
                <div
                        class="control-group <?php echo !empty($postError) ? 'error' : ''; ?>">
                    <!-- <label class="control-label" > Message</label > -->
                    <div class="controls">

                        <textarea name="content" type="text" placeholder="type note..."
                                  value="<?php echo !empty($content) ? $content : ''; ?>"><?php if (!empty($messageError)): ?>
                                <span class="help-inline"><?php echo $messageError; ?></span><?php endif; ?></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Create</button>
                    <a class="btn" href="index.php">Back</a>
                </div>
            </form>
        </div>

    </div>
    <!-- /container -->

</body>
</html>




