<html>
<head>
<style type="text/css">
    body {
        -moz-user-select : none;
        -webkit-user-select: none;
    }
</style><head>
<body>
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
$query1 = mysqli_query($con,"SELECT id, english, meaning FROM TOEFL_IS_600 ORDER BY RAND() LIMIT 1");
$row1 = mysqli_fetch_array($query1);
$question = $row1[english];
$query11 = mysqli_query($con2,"SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `english` = '$question'" );
$row11 = mysqli_fetch_array($query11);

$answer = $row11[chinese];

?>

<?PHP
//===== 3 Answer Items =====
$query2 = mysqli_query($con2,"SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `master_id` = $row11[master_id] + 100");
$query3 = mysqli_query($con2,"SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `master_id` = $row11[master_id] + 200");
$query4 = mysqli_query($con2,"SELECT `master_id`, `english`, `chinese` FROM dictionary.pydict WHERE `master_id` = $row11[master_id] + 300");
	
$row2 = mysqli_fetch_array($query2);
$row3 = mysqli_fetch_array($query3);
$row4 = mysqli_fetch_array($query4);
?>

<?PHP
$arr = array(
        $row11[chinese],
        $row2[chinese],
        $row3[chinese],
        $row4[chinese],
    );
// echo 'Original Array: ','<br>'; 
// echo $arr[0],'<br>';
// echo $arr[1],'<br>';
// echo $arr[2],'<br>';
// echo $arr[3],'<br>';
// echo "<br>";
// foreach ($arr as $ans => $arr) 
	// {
    // echo "$ans: $arr<br />\n";
	// }
	
// foreach ($arr as $ans => $arr) 
	// {
    // echo "$ans: $arr<br />\n";
	// }
	
shuffle($arr);
// echo 'Array Shuffled: ','<br>'; 
// echo $arr[0],'<br>';
// echo $arr[1],'<br>';
// echo $arr[2],'<br>';
// echo $arr[3],'<br>';
// foreach ($arr2 as $ans => $arr2) 
	// {
    // echo "$ans: $arr2<br />\n";
	// }

// echo "<br>";
// print_r (array_values ($arr));
// echo "<br>";

?>


<!-- ===== FORM =====  -->
<!-- form ACTION = "test4.php" name="flashcard" method="POST"> 
<form ACTION = "flashcard.php" name="flashcard" method="POST">
-->
<div style="width: 500px; margin: 80px auto 0 auto;">
<form 
style="color: ;background-color: ;width:300px; " ACTION = "<?php echo $_SERVER['PHP_SELF']?>" name="flashcard" method="POST">  
<fieldset>
<legend>PEC Flashcard: TOEFL_IS_600 Chinese</legend>
<p style="font-size:25px;"><?PHP echo $question ?></p>

<input type="hidden" name="theanswer" value="<?PHP echo $answer; ?>">
<input type="hidden" name="question" value="<?PHP echo $question; ?>">

<input  cols="20" type="submit" name="answer" value="<?PHP echo $arr[0] ?>"> <br> 
<input  cols="20" type="submit" name="answer" value="<?PHP echo $arr[1] ?>"> <br>
<input  cols="20" type="submit" name="answer" value="<?PHP echo $arr[2] ?>"> <br>
<input  cols="20" type="submit" name="answer" value="<?PHP echo $arr[3] ?>"> 
<!-- name 可以重複 -->

<!-- <p><input type="submit" value="Submit" name = "ACTION"></p> -->
</fieldset>
</form>



 <?PHP
// ===== POST Answer =====
// ===== Can't not take variable directly from prior scripts before FORM =====
// echo 'The posted answer. ',$_POST['answer'],'<br>';
// echo 'the saved id: ', $answer_id_new, '<br>';
// $answer_check_query = mysqli_query($con,"SELECT id, chinese FROM 7000_words WHERE id = '$answer_id_new'");
// echo 'the saved id is still: ', $answer_id_new, '<br>';
// $answer_check_array = mysqli_fetch_array($answer_check_query);
// echo 'use the saved id to query: ', $answer_check_array [chinese], '<br>';
// $answer_check = $answer_check_array[chinese];
// echo 'The new answer. ';
// echo 'the answewr_real: ',$answer_real ;
// echo 'The answer: ', $_POST['theanswer'],'<br>'; 
// echo '<br>';
if ($_POST['theanswer'] == $_POST['answer'] )
	{
	mysqli_query($con,"INSERT INTO TOEFL_IS_600 (`lala_correct`) VALUES () WHERE ");
	// echo 'V', '<br>';
	echo "<p style='color:white;background-color:grey;width:294px;padding:3px;font-size:16;'>".$_POST['question'],":","<br>", $_POST['answer']. "</p>";
	// echo $_POST['question']; 
	// echo $_POST['answer'];
	
	}
else 
	{
	// echo 'X', '<br>';
	echo "<p style='color:white;background-color:red;width:294px;padding:3px;font-size:16;'>". $_POST['question'],":","<br>", $_POST['theanswer'] . "</p>";
	}

?>
</div>
</body>
</html>