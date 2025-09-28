 <?PHP
// ===== POST Answer =====
echo "<br>";
echo 'The posted answer. ',$_POST['answer'],'<br>';
// echo 'the saved id: ', $answer_id_new, '<br>';
// $answer_check_query = mysqli_query($con,"SELECT id, chinese FROM 7000_words WHERE id = '$answer_id_new'");
// echo 'the saved id is still: ', $answer_id_new, '<br>';
// $answer_check_array = mysqli_fetch_array($answer_check_query);
// echo 'use the saved id to query: ', $answer_check_array [chinese], '<br>';
// $answer_check = $answer_check_array[chinese];
// echo 'The new answer. ';
// echo 'the answewr_real: ',$answer_real ;
echo 'The answer: ', $_POST['theanswer'],'<br>';
echo '<br>';

if ($_POST['theanswer'] == $_POST['answer'] )
	{
	echo 'OK';
	}
else 
	{
	echo 'Not OK';
	}

?>
