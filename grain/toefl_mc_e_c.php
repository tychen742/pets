<?php session_start(); ?>

<html>
<head><title>PEC TOEFL</title>
    <style></style>
</head>
<body>

<?php
// ===== Session ID =====
$id = $_SESSION['username'];
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
echo $id, '  ', "<div> <a href = member/logout.php> log out</a></div>";
//===== DB Connection =====
include("includes/db_conn.php");
include("includes/function_box.php");
//===== Create/Point to user score table =====
$score_table = $id . '_' . 'TOEFL_IS_600';

// ===== Create User Score  Table ===== //
$query_tbl = mysqli_query($conn_iss, "SELECT * FROM $score_table LIMIT 1");
$query_tbl_result = mysqli_fetch_array($query_tbl);

if (!$query_tbl_result && $id != null) {
    $query_create_table = "CREATE TABLE $score_table (id INT (11) NOT NULL, 
		english varchar(35), correct INT(3) DEFAULT 0, incorrect INT(3) DEFAULT 0,
		PRIMARY KEY (id),
		FOREIGN KEY (id) REFERENCES TOEFL_IS_600(id))";
    $result_create_table = $conn_iss->query($query_create_table);
    if ($result_create_table != null) {

        mysqli_query($conn_iss, "INSERT INTO $score_table(id)
				SELECT id FROM TOEFL_IS_600");

        $query_update_english = "UPDATE $score_table
				INNER JOIN TOEFL_IS_600 ON ($score_table.id = TOEFL_IS_600.id)
				SET $score_table.english = TOEFL_IS_600.english 
				WHERE $score_table.id = TOEFL_IS_600.id";
        $result_update_engish = $conn_iss->query($query_update_english);
        if (!$result_update_engish) {
            echo "Update id failed: (" . $conn_iss->errno . ") " . $conn_iss->error;
        }
    }
    // else{
    // echo "Table creation failed: (". $conn->errno . ") ". $conn->error;
    // }

}

?>
<?PHP
//===== 1 Question & 1 Answer =====
$question = pickWord($conn_iss)['english'];
$answer = findChinese($conn_iss, $question);
// echo $question[english];
// echo 'test';
?>

<?PHP
for ($i = 0; $i < 3; $i++) {
    ${"answer" . $i} = findChinese($conn_iss, (pickWord($conn_iss)['english']));
}

$arr = array(
    $answer,
    $answer0,
    $answer1,
    $answer2,
);
shuffle($arr);
?>
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

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <!-- ===== FORM =====  -->
            <div style="width: 500px; margin: 80px auto 0 auto;">
                <form
                        style="color:;background-color: ;width:300px; " ACTION="<?php echo $_SERVER['PHP_SELF'] ?>"
                        name="flashcard"
                        method="POST">
                    <fieldset>
                        <legend align="top">PEC: TOEFL_IS_600 English-Chinese</legend>
                        <p>

                            <?PHP
                            // ===== echo $sql_correct;
                            $sql_correct = mysqli_query($
                            conn_iss, "SELECT $score_table.english, $score_table.correct, $score_table.incorrect
				FROM `$score_table` WHERE $score_table.english = '$question' ");
                            $array_correct_head = mysqli_fetch_array($sql_correct);
                            $correct_head = $array_correct_head[1];
                            $incorrect_head = $array_correct_head[2];
                            echo '<div style = "font-size:25px;">' . $question . "</div>";
                            echo '<div style = "font-size:11px ;color:green; text-align: left;">' . '  ', $correct_head, '/', $incorrect_head, ' ' . "</div>";
                            ?>
                        </p>

                        <input type="hidden" name="theanswer" value="<?PHP echo $answer; ?>">
                        <input type="hidden" name="question" value="<?PHP echo $question; ?>">

                        <input cols="20" type="submit" name="answer" value="<?PHP echo $arr[0] ?>"> <br> <br>
                        <input cols="20" type="submit" name="answer" value="<?PHP echo $arr[1] ?>"> <br> <br>
                        <input cols="20" type="submit" name="answer" value="<?PHP echo $arr[2] ?>"> <br> <br>
                        <input cols="20" type="submit" name="answer" value="<?PHP echo $arr[3] ?>">
                    </fieldset>
                </form>

                <?PHP
                $question_old = $_POST['question'];
                if ($_POST['theanswer'] == $_POST['answer']) {
                    mysqli_query($conn_iss, "UPDATE $score_table SET correct = (correct + 1) WHERE english = '$question_old'");
                    echo "<p style='color:white;background-color:grey;width:294px;padding:3px;font-size:16;'>" . $_POST['question'], "<br>", $_POST['theanswer'] . "</p>";
                } else {
                    mysqli_query($conn_iss, "UPDATE $score_table SET incorrect = (incorrect + 1) WHERE english = '$question_old'");
                    echo "<p style='color:white;background-color:red;width:294px;padding:3px;font-size:16;'>" . $_POST['question'], ":", "<br>", $_POST['theanswer'] . "</p>";
                }

                // ====== End number  correct/incorrect
                echo $question_old;
                $sql_correct = mysqli_query($conn_iss, "SELECT $score_table.english, $score_table.correct, $score_table.incorrect
				FROM $score_table WHERE $score_table.english = '$question_old' ");
                $array_correct = mysqli_fetch_array($sql_correct);
                $correct_tail = $array_correct[1];
                $incorrect_tail = $array_correct[2];
                echo ' ', $correct_tail, '/', $incorrect_tail, ' ';
                echo '<br>';
                // $sql_attempted = mysqli_query($conn, "SELECT COUNT (*) AS total FROM $score_table
                // WHERE ($score_table.correct IS NOT NULL AND $score_table <> 0 OR $score_table.incorrect IS NOT NULL and $score_table <> 0)");
                // $row_attempted = mysqli_fetch_array($sql_attempted);
                // echo $row_attempted['total'];
                // $result = mysqli_query($conn, "SELECT SUM ()
                // echo ("SELECT correct, incorrect FROM $score_table WHERE )	");
                ?>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>



