<?php
session_start();
//$id = $_SESSION['username'];
include 'includes/db_conn.php';
include 'includes/function_box.php';
?>

<html>
<head>
    <title>Barron's 333</title>
</head>
<body>

<?PHP
// ===== DB Connection & Session =====//
// ===== Session ID =====
// session_start();
if ($_SESSION ['username']) {
    $id = $_SESSION ['username'];
    // if (session_status() == PHP_SESSION_NONE) {
    // session_start();
} else {
    echo 'Please log in.';
    echo '<meta http-equiv="Refresh" content="3; url=member/login.php">';
//    header ( "Location: http://c.org/pec/member_login.php" );
}
echo "<div align=right> Hi, $id! <a href = member/logout.php> log out</a></div>";
// ===== DB Connection =====

// ===== Create/Point to user score table =====
$score_table = $id . '_' . 'barrons333';

// ===== Create User Score Table ===== //
$query_tbl = "SELECT * FROM $score_table LIMIT 1";
$query_tbl_result = $conn_iss->query($query_tbl);

if (!$query_tbl_result && $id != null) {
    $query_create_table = "CREATE TABLE $score_table (id INT (11) NOT NULL, 
		grain varchar(35), correct INT(3) DEFAULT 0, incorrect INT(3) DEFAULT 0,
		dont_know INT(3) DEFAULT 0, not_sure INT(3) DEFAULT 0,
		PRIMARY KEY (id),
		FOREIGN KEY (id) REFERENCES barrons333(id))";
    $result_create_table = $conn_iss->query($query_create_table);
    if ($result_create_table != null) {
        // echo "Score table successfully created.";

        mysqli_query($conn_iss, "INSERT INTO $score_table(id)
				SELECT id FROM barrons333");

        // $query_update_id = "UPDATE `$score_table`
        // INNER JOIN `barrons333`
        // SET `$score_table`.id = `barrons333`.id";
        // $conn->query($query_update_id);
        // if (!$result_update_id){
        // echo "Update id failed: (" . $conn->errno . ") ". $conn->error;
        // }

        // insert the id and English from the barrans333 table to the score table

        // 1. set the update variable
        $query_update_english = "UPDATE $score_table
				INNER JOIN barrons333 ON ($score_table.id = barrons333.id)
				SET $score_table.grain = barrons333.grain 
				WHERE $score_table.id = barrons333.id";

        // 2. run the variable query
        $result_update_engish = $conn_iss->query($query_update_english);
        if (!$result_update_engish) {
            echo "Update id failed: (" . $conn_iss->errno . ") " . $conn_iss->error;
        }
    } else {
        echo "Table creation failed: (" . $conn_iss->errno . ") " . $conn_iss->error;
    }
}
// else {
// echo 'The table exists already.';
// }

// ===== 1 Question & 1 Answer =====
$query1 = mysqli_query($conn_iss, "SELECT id, grain, explanation FROM `barrons333` ORDER BY RAND() LIMIT 1");
$row1 = mysqli_fetch_array($query1);
$question = $row1 ['grain'];
// echo $row1[id], $row1[grain], $row1['explanation'];
// echo 'Original id: ', $answer_id = $row1[id], '<br>';
$answer = $row1 ['explanation'];

?>

<?PHP
// ===== 3 Answer Items =====//
$query2 = mysqli_query($conn_iss, "SELECT id, grain, explanation FROM barrons333 ORDER BY RAND() LIMIT 1");
$query3 = mysqli_query($conn_iss, "SELECT id, grain, explanation FROM barrons333 ORDER BY RAND() LIMIT 1");
$query4 = mysqli_query($conn_iss, "SELECT id, grain, explanation FROM barrons333 ORDER BY RAND() LIMIT 1");

$row2 = mysqli_fetch_array($query2);
$row3 = mysqli_fetch_array($query3);
$row4 = mysqli_fetch_array($query4);
echo "<br>";

// ===== Shuffle the answer items =====//
$arr = array(
    $row1 ['explanation'],
    $row2 ['explanation'],
    $row3 ['explanation'],
    $row4 ['explanation']
);

shuffle($arr);

?>


<!-- ===== FORM the whole form =====  -->
<div style="width: 600px; height: 1500px; margin: 3% auto 0 auto;">
    <FORM style="color: white; background-color: grey; width: 450px;"
          ACTION="<?php echo $_SERVER['PHP_SELF'] ?>" name="flashcard"
          method="POST">
        <fieldset>
            <legend>Barron's 333 Flashcards:</legend>
            <p>

                <?PHP
                // ===== echo Questoin and Correct Rate =====//
                $sql_dont_know = mysqli_query($
                conn_iss, "UPDATE $score_table SET $score_table.dont_know = ($score_table.dont_know + 1) WHERE $score_table.grain = 'theanswer' ");
                $sql_correct = mysqli_query($
                conn_iss, "SELECT $score_table.grain, $score_table.correct, $score_table.incorrect
				FROM $score_table WHERE $score_table.grain = '$question' ");
//              $array_correct_head = mysqli_fetch_array($sql_correct);
                // echo $array_correct_head[grain];
                $correct_head = $array_correct_head ['correct'];
                $incorrect_head = $array_correct_head ['incorrect'];
                echo '<div style = "font-size:25px;">' . $question . "</div>";
                echo '<div style = "font-size:12px ;color:white; text-align: right;">' . '  ', $correct_head, '/', $incorrect_head, ' ' . "</div>";
                ?>

            </p>
            <!-- Showing the answer items ===== // --->
            <input type="hidden" name="theanswer" value="<?PHP echo $answer; ?>">
            <input type="hidden" name="question"
                   value="<?PHP echo $question; ?>">

            <p>
                <input type="submit"
                       style="font-size: 16px; text-align: left; height: 48px; white-space: pre-wrap;"
                       name="answer" value="<?PHP echo $arr[0] ?>"> <br> <input
                        type="submit"
                        style="font-size: 16px; text-align: left; height: 48px; white-space: pre-wrap;"
                        name="answer" value="<?PHP echo $arr[1] ?>"> <br> <input
                        type="submit"
                        style="font-size: 16px; text-align: left; height: 48px; white-space: pre-wrap;"
                        name="answer" value="<?PHP echo $arr[2] ?>"> <br> <input
                        type="submit"
                        style="font-size: 16px; text-align: left; height: 48px; white-space: pre-wrap;"
                        name="answer" value="<?PHP echo $arr[3] ?>"> <br>

                <!-- 						<input type="submit"
						style="font-size: 16px; height: 48px; white-space: pre-wrap;"
						name="dont_know" value="<?PHP $sql_dont_know ?> "> <br>
-->
                <!-- <p><input type="submit" value="Submit" name = "ACTION"></p> -->

        </fieldset>
    </FORM>


    <?PHP
    if (isset ($_POST ["question"])) {
        $question_old = ($_POST ["question"]);
    }
    // ===== POST Answer =====
    // ===== Can't not take variable directly from prior scripts before FORM =====

    if (isset ($_POST ['theanswer'])) {
        ;
    }

    if (isset ($_POST ["answer"])) {
        if ($_POST ['theanswer'] == $_POST ['answer']) {
            mysqli_query($conn_iss, "UPDATE $score_table SET correct = (correct + 1) WHERE grain = '$question_old'");
            echo "<p style='color:white;background-color:grey;width:445px;padding:2px;font-size:16;'>" . $_POST ['question'], ' =  ', $_POST ['answer'] . "</p>";
        } else {
            mysqli_query($conn_iss, "UPDATE $score_table SET incorrect = (incorrect + 1) WHERE grain = '$question_old'");
            echo ' ', "<p style='color:white;background-color:red;width:445px;padding:2px;font-size:16;'>" . $_POST ['question'], ' =  ', $_POST ['theanswer'] . "</p>";
        }
    }
    // ====== Edit the Question
    // $_SESSION['theanswer'] = $row1;
    echo '<div
			style="width: 445px; font-size: 12px; color: white; text-align: right;">
			' . ' <a target="_blank"
				href=http://cycuim.org/pec/edit_window.php?to_be_edited
				= <?php echo answer ?> edit </a>
		</div>
		';
    // 		<!-- 		<form method="get" action="edit_window.php"> -->
    // 		<!-- 			<input type="hidden" name="varname" value="var_value"> <input -->
    // 		<!-- 				type="submit"> -->
    // 		<!-- 		</form> -->

    // <?php
    // ====== End number correct/incorrect
    if (isset ($question_old)) {

        $sql_correct = mysqli_query($conn_iss, "SELECT $score_table.grain, $score_table.correct, $score_table.incorrect
				FROM $score_table WHERE ($score_table.grain = '$question_old') ");
    }

    // query again for the correct answer
    $array_correct_tail = mysqli_fetch_array($sql_correct);
    $correct_tail = $array_correct_tail ['correct'];
    $incorrect_tail = $array_correct_tail ['incorrect'];
    echo ' ', $correct_tail, " correct ", '/ ', $incorrect_tail, ' ', ' incorrect';

    // $sql_correct = mysqli_query ( $conn, "SELECT $score_table.grain, $score_table.correct, $score_table.incorrect
    // FROM `$score_table` WHERE $score_table.grain = '$question' " );
    // $array_correct_head = mysqli_fetch_array ( $sql_correct );
    // $correct_head = $array_correct_head [correct];
    // $incorrect_head = $array_correct_head [incorrect];
    // echo '<div style = "font-size:25px;">'.$question."</div>";
    // echo '<div style = "font-size:12px ;color:white; text-align: left;">' . ' ', $correct_head, '/', $incorrect_head, ' ' . "</div>";
    // echo "\n";
    // echo ' You have studied ', 'words. ';

    ?>


</div>