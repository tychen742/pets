<?PHP
$con = mysqli_connect("localhost","root","redcar","word_list");
//===== CHARSET UTF-8 =====//
mysqli_set_charset($con,"utf8");
//mysqli_query("SET NAMES UTF-8");

if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
// else	
	// {
	// echo "Connection successful<br>";
	// }


	$query1 = mysqli_query($con,"SELECT id, english, chinese FROM 7000_words ORDER BY RAND() LIMIT 1");
	$query2 = mysqli_query($con,"SELECT id, english, chinese FROM 7000_words ORDER BY RAND() LIMIT 1");
	$query3 = mysqli_query($con,"SELECT id, english, chinese FROM 7000_words ORDER BY RAND() LIMIT 1");
	$query4 = mysqli_query($con,"SELECT id, english, chinese FROM 7000_words ORDER BY RAND() LIMIT 1");
	
// $words_array = array($words);
//echo ($words_array);
//$array_length = count ($words);
// list ($A, $B, $C, $D) = $words;
// echo $A;
// echo $rowCount = mysqli_num_rows ($words);
// print_r(array_keys($words));

$row1 = mysqli_fetch_array($query1);
$row2 = mysqli_fetch_array($query2);
$row3 = mysqli_fetch_array($query3);
$row4 = mysqli_fetch_array($query4);

//echo array_keys($query1);
//echo count($query1);
// echo "<br>";
// echo '??? SHould be 3: Count the row (fetched from queried array: ',count($row1);
// echo "<br>";
// print_r (array_values ($row1));
// echo "<br>";
//echo 'print the output of print_r(array_values(): ';
//print $output;
//echo $row1[english];
// echo "<br>";
// echo "<br>";
$question = $row1[english];
//echo $row1[id], $row1[english], $row1[chinese]; 
echo 'old id: ', $answer_id = $row1[id], '<br>';
$answer = $row1[chinese];
$answer_query = mysqli_query($con,"SELECT id, chinese FROM 7000_words WHERE id = $answer_id");
$answer_array = mysqli_fetch_array($answer_query);
$answer_id_new = $answer_array[id];
echo 'new id: ', $answer_id_new ;
//echo $answer;
// echo "<br>";
// echo "<br>";

// $arr = array(
        // 'A' => $row1[chinese],
        // 'B' => $row2[chinese],
        // 'C' => $row3[chinese],
        // 'D' => $row4[chinese],
    // );
$arr = array(
        $row1[chinese],
        $row2[chinese],
        $row3[chinese],
        $row4[chinese],
    );
	
// foreach ($arr as $ans => $arr) 
	// {
    // echo "$ans: $arr<br />\n";
	// }
// echo "<br>";
// print_r (array_values ($arr));
// echo "<br>";

// $arr2 = $arr;
shuffle($arr);

// echo ($arr2[0]);echo "<br>";
// echo ($arr2[1]);echo "<br>";
// echo ($arr2[2]);echo "<br>";
// echo ($arr2[3]);echo "<br>";echo "<br>";echo "<br>";

// foreach ($arr2 as $ans => $arr2) 
	// {
    // print "$ans: $arr2<br />\n";
	// }

// echo "<br>";
// print_r (array_values ($arr));
// echo "<br>";


// if (array_key_exists([0], $arr2)) 
	// {
// echo "Key exists!";
	// }
// else
  // {
  // echo "Key does not exist!";
  // }

// uasort($arr, function(){return mt_rand(-1,1);} );
// $arr_keys =  array_keys($arr);
// $arr_new_keys = array_flip($arr_keys);
// array_walk($arr_new_keys, function(&$value){ $value = chr($value+65); });
// $chr_a =  'A';
// foreach ($arr as $key=>$value){
    // echo $chr_a++." ... ".$value." <br> ";
// }
?>

<!-- <form ACTION = "test4.php" name="flashcard" method="POST"> -->

<form ACTION = "<?php echo $_SERVER['PHP_SELF']?>" name="flashcard" method="POST">
<p><?PHP echo $question ?>
</p>
<br>
<br>
<input type="radio" name="answer1" value="<?PHP echo $arr[0] ?>"> <?PHP echo $arr[0] ?><br>
<input type="radio" name="answer2" value="<?PHP echo $arr[1] ?>"> <?PHP echo $arr[1] ?> <br>
<input type="radio" name="answer3" value="<?PHP echo $arr[2] ?>"> <?PHP echo $arr[2] ?><br>
<input type="radio" name="answer4" value="<?PHP echo $arr[3] ?>"> <?PHP echo $arr[3] ?><br>
<!-- name 不可以重複 -->
</p>
<p><input type="submit" value="Submit"></p>
</form>

<?PHP
echo "<br>";
echo 'The posted answer. ',$_POST['answer'],'<br>';
echo 'the saved id: ', $answer_id_new, '<br>';
$answer_check_query = mysqli_query($con,"SELECT id, chinese FROM 7000_words WHERE id = $answer_id_new");
echo 'the saved id is still: ', $answer_id_new, '<br>';
$answer_check_array = mysqli_fetch_array($answer_check_query);
echo 'use the saved id to query: ', $answer_check_array [chinese], '<br>';
$answer_check = $answer_check_array[chinese];
// echo 'The new answer. ';
// echo 'the answewr_real: ',$answer_real ;
// echo 'The new answer. ', $row1[chinese];
if ($_POST['answer'] == $$answer)
	{
	echo 'OK';
	}
else
	{
	echo 'Try again!';
	}
	// ,' ', $question, ' = ', $answer'
// if ($_POST['answer'] == $answer) 
	// {
	// echo 'OK';
	// } 
	// =====  If incorrect, go to back side of card =====
// ===== If correct, go to next card =====
// if (input == $row1[chinese])
	// {
	// //Correct ;
	// go to next card ;
	// {
// else 
	// {
	// //Go to back side of card. ;
	// go to next card ;
	// }
// <?PHP echo $question 
// <?PHP $answer 
//<input type="hidden" name="the_answer" value = "<?PHP $answer >"> <?PHP $answer > 
//<?PHP $answer >
mysqli_close($con); 
?>