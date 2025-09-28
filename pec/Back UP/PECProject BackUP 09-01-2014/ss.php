<?php 
// session_start(); 
// $id = $_SESSION['username'];
?>
<?PHP
//===== DB Connection =====
include("mysql_connect.inc.php");


function pickWord() {
	$sql = 	mysql_query ("SELECT id, english FROM `TOEFL_IS_600` 
			ORDER BY RAND () LIMIT 1");	
	return $result = mysql_fetch_array ($sql);
	}

// function findChinese($input){
	// $sql = 	mysql_query ("SELECT chinese, english FROM `pydict`
			// WHERE $input = english");
	// echo $sql;
	// return $result = mysql_fetch_array ($sql);
	// echo $result;
	// }

// echo findChinese("test")[chinese];
	
//====== // get 1 question
$question = pickWord()[english];  
// echo 'TESTing...Q = '.pickWord()[english], '<br>';
// echo 'TESTing...Q = '.$question, '<br>';
// echo pickWord()[english];


//====== // get 3 answers;
for ($i = 0; $i < 3; $i++){
	$answer[$i] = pickWord()[english];
	$answer_id[$i] = pickWord()[id];
	// echo '$answer.$i', '<br>';
	// echo $answer[$i];
	if ($answer[$i] == $question){
		// pickWord();
		// echo "WOW! same as the question! <br>";
		$i = $i-1;
		}
	// elseif ($answer.$i == $answer.$i+1){
		// // pickWord();
		// echo "WOW! same as the answer! <br>";
		// $i = $i-1;
		// }
	else {
		// echo $answer.[id];
		// echo '$answer'.$i, '<br>';
		// echo $i,' = ',$answer[$i];
	 	// '$answer'.$i = $answer[$i];
		// echo '$answer'.$i;
		
		// echo '$answer'.$i ;
		// return '$answer'.$i, '<br>'; //WORKS!!
		return '$answer'.$i; 
		return $answer[$i]; 
		
		
		// $b = echo $answer[$i]; 
		// echo $b;
		
		// echo '<br>';
		// echo '$answer'.$i = $answer[$i];
		// echo $i,' = ',$answer[$i];
		}

}
// echo '<br>';
echo $a[0];
echo $answer1;
echo $answer2;
?>
