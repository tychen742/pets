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

<?PHP
//===== DB Connection =====
$con = mysqli_connect("localhost","root","redcar","word_list");
if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
$con2 = mysqli_connect("localhost","root","redcar","dictionary");
if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
//===== CHARSET UTF-8 =====//
mysqli_set_charset($con,"utf8");
mysqli_set_charset($con2,"utf8");
mysqli_query("SET NAMES UTF-8");//IE add this line
header("Content-Type: text/html;charset=UTF-8");

//===== 1 Question & 1 Answer =====
$query1 = mysqli_query($con,"SELECT `id`, `english`, `lala_correct`, `lala_incorrect` FROM TOEFL_IS_600 WHERE `lala_correct` < 5 ORDER BY RAND() LIMIT 1");
$row1 = mysqli_fetch_array($query1);
$question = $row1[english];
$query11 = mysqli_query($con2,"SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `english` = '$question'" );
$row11 = mysqli_fetch_array($query11);
$answer = $row11[chinese];
echo $row1[id], '<br>';

?>

<?PHP
//===== 3 Answer Items =====
//$query2 = mysqli_query($con2, "SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `master_id` = $row11[master_id] + 100");
// $query2 = mysqli_query($con,"SELECT `id`, `english` FROM `TOEFL_IS_600` ORDER BY RAND () LIMIT BY 1"); // BY is not needed
$query2 = mysqli_query($con,"SELECT id, english FROM `TOEFL_IS_600` ORDER BY RAND () LIMIT 1"); 
//$query2 = mysqli_query($con,"SELECT id, english, meaning FROM TOEFL_IS_600 ORDER BY RAND() LIMIT 1");

$query3 = mysqli_query($con,"SELECT id, english FROM `TOEFL_IS_600` ORDER BY RAND () LIMIT 1"); 
//$query3 = mysqli_query($con2, "SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `master_id` = $row11[master_id] + 200");
//$query31 = mysqli_query($con2,"SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `english` = '$question'" );

$query4 = mysqli_query($con,"SELECT id, english FROM `TOEFL_IS_600` ORDER BY RAND () LIMIT 1"); 
//$query4 = mysqli_query($con2, "SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `master_id` = $row11[master_id] + 300");
//$query41 = mysqli_query($con2,"SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `english` = '$question'" );
	
$row2 = mysqli_fetch_array($query2);
$row3 = mysqli_fetch_array($query3);
$row4 = mysqli_fetch_array($query4);


// echo $row2[english],'<br>'; //TESTed OK
//$row_answer_2 = $row2[english]; //TEST

$query21 = mysqli_query($con2, "SELECT `master_id`,`english`, `chinese` FROM dictionary.pydict WHERE english = '$row2[english]'" );
$row21 = mysqli_fetch_array($query21);
$query31 = mysqli_query($con2, "SELECT `master_id`,`english`, `chinese` FROM dictionary.pydict WHERE english = '$row3[english]'" );
$row31 = mysqli_fetch_array($query31);
$query41 = mysqli_query($con2, "SELECT `master_id`,`english`, `chinese` FROM dictionary.pydict WHERE english = '$row4[english]'" );
$row41 = mysqli_fetch_array($query41);

echo $row2[id],$row2[english], $row21[master_id], $row21[english], $row21[chinese], '<br>';
echo $row3[id],$row3[english],$row31[master_id], $row31[english], $row31[chinese], '<br>';
echo $row4[id],$row4[english],$row41[master_id], $row41[english], $row41[chinese], '<br>';

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
<?PHP echo $row1[lala_correct], '||',$row1[lala_incorrect] ?> </p>
</fieldset>
</form>



 <?PHP
// ===== POST Answer =====
// ?? ===== Can't not take variable directly from prior scripts before FORM? 加上 ' ' 即可 =====
// echo 'The posted answer. ',$_POST['answer'],'<br>';
if ($_POST['theanswer'] == $_POST['answer'] )
	{
	// NEED the ` ` ha ha! mysqli_query($con,"UPDATE TOEFL_IS_600 SET `lala_correct` = `lala_correct`+1 WHERE `id` = $row1[id]");
//	mysqli_query($con,"UPDATE `TOEFL_IS_600` SET `lala_correct` = `lala_correct` + 1 WHERE `id` = $row1[id]");
	echo "<p style='color:white;background-color:grey;width:294px;padding:3px;font-size:16;'>".$_POST['question'],":","<br>", $_POST['answer']. "</p>";
	}
else 
	{
//	mysqli_query($con,"UPDATE `TOEFL_IS_600` SET `lala_incorrect` = `lala_incorrect` + 1 WHERE `id` = $row1[id]");
	echo "<p style='color:white;background-color:red;width:294px;padding:3px;font-size:16;'>". $_POST['question'],":","<br>", $_POST['theanswer'] . "</p>";
	}

?>
</div>
</body>
</html>