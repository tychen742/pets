<html>
<head>
<head>
<body>

<!-- In head, no right-click
<style type="text/css">
    body {
        -moz-user-select : none;
        -webkit-user-select: none;
    }
</style>
-->
<?php 
session_start(); 
$id = $_SESSION['username'];
echo $id;
//===== DB Connection =====
include("mysql_connect.inc.php");

$score_table = $id.'_'.TOEFL_IS_600;
// echo $score_table, '<br>';
// $answer_correct = $id.'_correct';
// echo $answer_correct, '<br>';
// $answer_incorrect = $id.'_incorrect';
// echo $answer_incorrect;

?>
<?PHP

//===== 1 Question & 1 Answer =====
// mysqli doesn't work 
$query1 = mysql_query("SELECT TOEFL_IS_600.id, TOEFL_IS_600.english, $score_table.correct, $score_table.incorrect FROM `TOEFL_IS_600`, `$score_table` WHERE $score_table.correct < 6 ORDER BY RAND() LIMIT 1");
$row1 = mysql_fetch_array($query1);
$question = $row1[english];
$query11 = mysql_query("SELECT `master_id`, `english`, `chinese` FROM pydict WHERE `english` = '$question'" );
$row11 = mysql_fetch_array($query11);
$answer = $row11[chinese];
//echo $row1[id], '<br>';

?>

<?PHP
//===== 3 Answer Items =====
//$query2 = mysqli_query($con2, "SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `master_id` = $row11[master_id] + 100");
// $query2 = mysqli_query($con,"SELECT `id`, `english` FROM `TOEFL_IS_600` ORDER BY RAND () LIMIT BY 1"); // BY is not needed
$query2 = mysql_query("SELECT `id`, `english` FROM `TOEFL_IS_600` ORDER BY RAND () LIMIT 1"); 

$query3 = mysql_query("SELECT id, english FROM `TOEFL_IS_600` ORDER BY RAND () LIMIT 1"); 
//$query31 = mysqli_query($con2,"SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `english` = '$question'" );
$query4 = mysql_query("SELECT id, english FROM `TOEFL_IS_600` ORDER BY RAND () LIMIT 1"); 
//$query41 = mysqli_query($con2,"SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `english` = '$question'" );
	
$row2 = mysql_fetch_array($query2);
$row3 = mysql_fetch_array($query3);
$row4 = mysql_fetch_array($query4);

$query21 = mysql_query( "SELECT `master_id`,`english`, `chinese` FROM pydict WHERE english = '$row2[english]'" );
$row21 = mysql_fetch_array($query21);
$query31 = mysql_query("SELECT `master_id`,`english`, `chinese` FROM pydict WHERE english = '$row3[english]'" );
$row31 = mysql_fetch_array($query31);
$query41 = mysql_query( "SELECT `master_id`,`english`, `chinese` FROM pydict WHERE english = '$row4[english]'" );
$row41 = mysql_fetch_array($query41);

$arr = array(
        $row11[chinese],
        $row21[chinese],
        $row31[chinese],
        $row41[chinese],
    );
	
shuffle($arr);
?>


<!-- ===== FORM =====  -->
<div style="width: 500px; margin: 80px auto 0 auto;">
<form 
style="color: ;background-color: ;width:300px; " ACTION = "<?php echo $_SERVER['PHP_SELF']?>" name="flashcard" method="POST">  
<fieldset>
<legend>PEC Flashcard: TOEFL_IS_600 Chinese</legend>

<p style="font-size:25px;"><?PHP echo $question ?></p>

<input type="hidden" name="theanswer" value="<?PHP echo $answer; ?>">
<input type="hidden" name="question" value="<?PHP echo $question; ?>">

<input  cols="20" type="submit" name="answer" value="<?PHP echo $arr[0] ?>"> <br> <br>
<input  cols="20" type="submit" name="answer" value="<?PHP echo $arr[1] ?>"> <br> <br>
<input  cols="20" type="submit" name="answer" value="<?PHP echo $arr[2] ?>"> <br> <br>
<input  cols="20" type="submit" name="answer" value="<?PHP echo $arr[3] ?>"> 
<!-- name 可以重複 -->

<!-- ===== Correct/Incorrect =====  -->
<p style='color:green;background-color:;width:;text-align:right;'>
<?PHP echo $row1[correct], '||',$row1[incorrect] ?> </p>
</fieldset>
</form>



 <?PHP
// ===== POST Answer =====
// ?? ===== Can't not take variable directly from prior scripts before FORM =====
// echo 'The posted answer. ',$_POST['answer'],'<br>';
if ($_POST['theanswer'] == $_POST['answer'] )
	{
	// NEED the ` ` ha ha! mysqli_query($con,"UPDATE TOEFL_IS_600 SET `polo_correct` = `polo_correct`+1 WHERE `id` = $row1[id]");
	mysql_query("UPDATE $score_table SET correct = correct + 1 WHERE id = $row1[id]");
	echo "<p style='color:white;background-color:grey;width:294px;padding:3px;font-size:16;'>".$_POST['question'],":","<br>", $_POST['answer']. "</p>";
	}
else 
	{
	mysql_query("UPDATE $score_table SET incorrect = incorrect + 1 WHERE id = $row1[id]");
	echo "<p style='color:white;background-color:red;width:294px;padding:3px;font-size:16;'>". $_POST['question'],":","<br>", $_POST['theanswer'] . "</p>";
	}

?>
</div>
</body>
</html>