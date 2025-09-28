<html>
<head>
<title> PEC HS-7000 </title>
</head>
<body>

<?PHP
//===== DB Connection & Session  =====//
// ===== Session ID =====
// session_start(); 
if ($_SESSION['username']){
$id = $_SESSION['username'];
// if (session_status() == PHP_SESSION_NONE) {
    // session_start();
}else{ 
//    header("Location: http://polochen.com/member_login.php");
	}
echo $id, '  ', "<div> <a href = logout.php> log out</a></div>";
//===== DB Connection =====
include("db_conn.php");
include("function_box.php");
//===== Create/Point to user score table =====
$score_table = $id.'_'.'moe_7000'; 


// ===== Create User Score  Table ===== //
$query_tbl = "SELECT * FROM $score_table LIMIT 1" ;
$query_tbl_result = $conn_iss->query($query_tbl);
		
if (!$query_tbl_result && $id != null) {
	$query_create_table = "CREATE TABLE $score_table (id INT (11) NOT NULL, 
		english varchar(35), correct INT(3) DEFAULT 0, incorrect INT(3) DEFAULT 0,
		PRIMARY KEY (id),
		FOREIGN KEY (id) REFERENCES moe_7000(id))"; 
	$result_create_table = $conn_iss->query($query_create_table);
		if ($result_create_table != null) {
			//echo "Score table successfully created.";
			
			mysqli_query($conn_iss, "INSERT INTO $score_table(id)
				SELECT id FROM moe_7000");
			
			// $query_update_id = "UPDATE `$score_table`
				// INNER JOIN `moe_7000` 
				// SET `$score_table`.id = `moe_7000`.id";
			// $conn->query($query_update_id);
				// if (!$result_update_id){
				// echo "Update id failed: (" . $conn->errno . ") ". $conn->error;
				// }
			$query_update_english = "UPDATE $score_table
				INNER JOIN moe_7000 ON ($score_table.id = moe_7000.id)
				SET $score_table.english = moe_7000.english 
				WHERE $score_table.id = moe_7000.id";
			$result_update_engish = $conn_iss->query($query_update_english);
				if (!$result_update_engish){
				echo "Update id failed: (" . $conn_iss->errno . ") ". $conn_iss->error;
				}				
			}
		else{
			echo "Table creation failed: (". $conn_iss->errno . ") ". $conn_iss->error;
			}
	
	}
	// else {
		// echo 'The table exists already.';
	// }
	
	
	
//===== 1 Question & 1 Answer =====
$query1 = mysqli_query($conn_iss,"SELECT id, english, chinese FROM `moe_7000` ORDER BY RAND() LIMIT 1");
$row1 = mysqli_fetch_array($query1);
$question = $row1['english'];
//echo $row1[id], $row1[english], $row1[chinese]; 
// echo 'Original id: ', $answer_id = $row1[id], '<br>';
$answer = $row1['chinese'];

?>

<?PHP
//===== 3 Answer Items =====//
$query2 = mysqli_query($conn_iss,"SELECT id, english, chinese FROM moe_7000 ORDER BY RAND() LIMIT 1");
$query3 = mysqli_query($conn_iss,"SELECT id, english, chinese FROM moe_7000 ORDER BY RAND() LIMIT 1");
$query4 = mysqli_query($conn_iss,"SELECT id, english, chinese FROM moe_7000 ORDER BY RAND() LIMIT 1");
	
$row2 = mysqli_fetch_array($query2);
$row3 = mysqli_fetch_array($query3);
$row4 = mysqli_fetch_array($query4);
echo "<br>";

//===== Shuffle the answer items =====//
$arr = array(
        $row1['chinese'],
        $row2['chinese'],
        $row3['chinese'],
        $row4['chinese'],
    );
	
shuffle($arr);

?>


<!-- ===== FORM =====  -->
<div style="width: 500px; margin: 80px auto 0 auto;">
<FORM 
style="color:white;background-color:grey;width:300px;" ACTION = "<?php echo $_SERVER['PHP_SELF']?>" name="flashcard" method="POST">  
<fieldset>
<legend>PEC MOE HS 7000 Flashcard:</legend>
<p>

<?PHP 
//===== echo Questoin and Correct Rate =====//			
$sql_correct = mysqli_query($
conn_iss, "SELECT $score_table.english, $score_table.correct, $score_table.incorrect
				FROM `$score_table` WHERE $score_table.english = '$question' ");
$array_correct_head= mysqli_fetch_array ($sql_correct);
// echo $array_correct_head[english];
$correct_head = $array_correct_head['correct'];
$incorrect_head = $array_correct_head['incorrect'];
echo '<div style = "font-size:25px;">'.$question."</div>";
echo '<div style = "font-size:11px ;color:white; text-align: left;">'. '  ',$correct_head, '/', $incorrect_head, ' ' ."</div>"; 
?>
</p>

<input type="hidden" name="theanswer" value="<?PHP echo $answer; ?>">
<input type="hidden" name="question" value="<?PHP echo $question; ?>">

<p><input type="submit" name="answer" value="<?PHP echo $arr[0] ?>"> <br></p>
<p><input type="submit" name="answer" value="<?PHP echo $arr[1] ?>"> </p>
<input type="submit" name="answer" value="<?PHP echo $arr[2] ?>"> </p>
<input type="submit" name="answer" value="<?PHP echo $arr[3] ?>"> <br>
</p>
<!-- <p><input type="submit" value="Submit" name = "ACTION"></p> -->
</fieldset>
</FORM> 


 <?PHP
 if (isset($_POST["question"])) {
 $question_old = ($_POST["question"]);
 }
// ===== POST Answer =====
// ===== Can't not take variable directly from prior scripts before FORM =====

 if (isset($_POST['theanswer'])) {
 	;
 }

if (isset($_POST["answer"])) {
if ($_POST['theanswer'] == $_POST['answer'] )
	{
	mysqli_query($conn_iss, "UPDATE $score_table SET correct = (correct + 1) WHERE english = '$question_old'");
	echo "<p style='color:white;background-color:grey;width:294px;padding:3px;font-size:16;'>" .$_POST['question'], '  ', $_POST['answer']. "</p>";
	}
else 
	{
	mysqli_query($conn_iss, "UPDATE $score_table SET incorrect = (incorrect + 1) WHERE english = '$question_old'");
	echo ' ', "<p style='color:white;background-color:red;width:294px;padding:3px;font-size:16;'>". $_POST['question'], '  ', $_POST['theanswer'] . "</p>";
	
 }}
 
// ====== End number  correct/incorrect
if (isset($question_old)) {

$sql_correct = mysqli_query($conn_iss, "SELECT $score_table.english, $score_table.correct, $score_table.incorrect
				FROM $score_table WHERE ($score_table.english = '$question_old') ");
}
$array_correct_tail = mysqli_fetch_array ($sql_correct);
$correct_tail = $array_correct_tail['correct'];
$incorrect_tail = $array_correct_tail['incorrect'];
echo ' ',$correct_tail, '/', $incorrect_tail, ' ';

// $sql_correct = mysqli_query($conn, "SELECT $score_table.english, $score_table.correct, $score_table.incorrect
				// FROM `$score_table` WHERE $score_table.english = '$question' ");
// $array_correct_head= mysqli_fetch_array ($sql_correct);
// $correct_head = $array_correct_head[correct];
// $incorrect_head = $array_correct_head[incorrect];
// echo '<div style = "font-size:25px;">'.$question."</div>";
// echo '<div style = "font-size:11px ;color:white; text-align: left;">'. '  ',$correct_head, '/', $incorrect_head, ' ' ."</div>"; 
?>
</div>