<?php
//session_start();
include 'includes/session.php';
include 'includes/session.php';
include 'includes/database.php' ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">

    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- ########################  STYLE ###################################-->
    <link rel="stylesheet" type="text/css" href="../styles/notes.css">

</head>

<header>
    <title>Notes</title>
</header>

<body>

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-2"></div>
        <div class="col-sm-7">
            <?php include 'includes/greeting.php' ?>
<br><br>
            <h1 style="display: inline"> notes </h1>

            <?php
            //            echo $userid_notes;

            if (empty ($userid_notes)) {
                echo '<br><br>Please <button class="btn btn-success" onclick=location.href="member/login.php" >log in</button>  or <button class="btn btn-success" onclick=location.href="member/signup.php" >Sign up</button>';
            } else {

                echo '<a href = "create.php" style="display: inline"> New Note  <br> </a>';
                ?>
                <?php
                // ############################ SHOW MESSAGE ###########################
                try {
                    $pdo = Database::connect();
                    $sql = ("SELECT * FROM content WHERE (id_user = $userid_notes) ORDER BY content.date_time_add DESC");
                    $result = $pdo->query($sql);
                    // foreach ($con->query($sql) as $row) {
                    foreach ($pdo->query($sql) as $row) {
                        echo "<br>";
                        echo $row['text'];
                        // echo '<br> ';
                        echo ' ';
                        echo '<a class="btn btn-success" href="update.php?id_get=' . $row['id_note'] . '">Update</a>';
                        echo ' ';
                        echo '<a class="btn btn-danger" href="delete.php?id_get=' . $row['id_note'] . '">Delete</a>';
                    }
                } catch (PDOException $ex) {
                    echo $ex->getMessage();
                }
            }
            ?>

        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>


