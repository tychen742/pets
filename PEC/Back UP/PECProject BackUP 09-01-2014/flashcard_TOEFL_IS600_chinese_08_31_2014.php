<html>
<head>
<head>
<body>
<?php session_start(); 
$id = $_SESSION['username'];
?>
<?PHP
//===== DB Connection =====
include("mysql_connect.inc.php");


// function Pick Word
function pickWord() {
	$sql = 	mysql_query ("SELECT id, english FROM `TOEFL_IS_600` 
			ORDER BY RAND () LIMIT 1");	
	return $result = mysql_fetch_array ($sql);
	}

//====== get 1 question ======
$question = pickWord()[english];  

//====== 3 Answer Items ======
for ($i = 0; $i < 3; $i++){
	$answer[$i] = pickWord()[english];
	$answer_id[$i] = pickWord()[id];
	if ($answer[$i] == $question){
		$i = $i-1;
		}
	else {
		// return $answer[$i];
		$query2.$i = $answer[$i];
		}

}




$query2 = mysql_query("SELECT `id`, `english` FROM `TOEFL_IS_600` ORDER BY RAND () LIMIT 1"); 
$row2 = mysql_fetch_array($query2);
// $query21 = mysql_query( "SELECT `master_id`,`english`, `chinese` FROM pydict WHERE english = '$row2[english]'" );
// $query21 = $answer[0];

$row21 = mysql_fetch_array($query21);
//while $row2[english] != $question;

$query3 = mysql_query("SELECT id, english FROM `TOEFL_IS_600` ORDER BY RAND () LIMIT 1"); 
$row3 = mysql_fetch_array($query3);
$query31 = mysql_query("SELECT `master_id`,`english`, `chinese` FROM pydict WHERE english = '$row3[english]'" );
$row31 = mysql_fetch_array($query31);

$query4 = mysql_query("SELECT id, english FROM `TOEFL_IS_600` ORDER BY RAND () LIMIT 1"); 
$row4 = mysql_fetch_array($query4);
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
	// NEED the ` ` ha ha! mysqli_query($con,"UPDATE TOEFL_IS_600 SET `polochen_correct` = `polochen_correct`+1 WHERE `id` = $row1[id]");
	mysql_query("UPDATE `$p_table` SET `correct` = `correct` + 1 WHERE `id` = $row1[id]");
	echo "<p style='color:white;background-color:grey;width:294px;padding:3px;font-size:16;'>".$_POST['question'],":","<br>", $_POST['answer']. "</p>";
	}
else 
	{
	mysql_query("UPDATE `$p_table` SET `incorrect` = `incorrect` + 1 WHERE `id` = $row1[id]");
	echo "<p style='color:white;background-color:red;width:294px;padding:3px;font-size:16;'>". $_POST['question'],":","<br>", $_POST['theanswer'] . "</p>";
	}

?>
</div>
</body>
</html>