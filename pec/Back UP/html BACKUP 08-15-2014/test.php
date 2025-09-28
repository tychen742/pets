<html>
<head> 
</head>
<body>
<?PHP

mysql_query("set names utf8");
$con = mysqli_connect("localhost","root","redcar","word_list");
//===== CHARSET UTF-8 =====//
mysqli_set_charset($con,"utf8");
mysqli_query("SET NAMES UTF-8");

if (mysqli_connect_errno()) 
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
// else	{
	// echo "Connection successful<br>";
	// }
$word1 = mysqli_query($con,"SELECT id, english, chinese FROM 7000_words ORDER BY RAND() LIMIT 1");
$word2 = mysqli_query($con,"SELECT id, english, chinese FROM 7000_words ORDER BY RAND() LIMIT 1");
$word3 = mysqli_query($con,"SELECT id, english, chinese FROM 7000_words ORDER BY RAND() LIMIT 1");
$word4 = mysqli_query($con,"SELECT id, english, chinese FROM 7000_words ORDER BY RAND() LIMIT 1");

// $words_array = array($words);
//echo ($words_array);
//$array_length = count ($words);
// list ($A, $B, $C, $D) = $words;
// echo $A;
// echo $rowCount = mysqli_num_rows ($words);
// print_r(array_keys($words));
$row1 = mysqli_fetch_array($word1);
$row2 = mysqli_fetch_array($word2);
$row3 = mysqli_fetch_array($word3);
$row4 = mysqli_fetch_array($word4);
echo $question = $row1[english];
echo "<br>";echo "<br>";
$answer1 = $row1[chinese]; 
$answer2 = $row2[chinese]; 
$answer3 = $row3[chinese]; 
$answer4 = $row4[chinese]; 

$arr = array(
        'A' => $answer1,
        'B' => $answer2,
        'C' => $answer3,
        'D' => $answer4,
    );
uasort($arr, function(){return mt_rand(-1,1);} );

$arr_keys =  array_keys($arr);

$arr_new_keys = array_flip($arr_keys);

array_walk($arr_new_keys, function(&$value){ $value = chr($value+65); });

$chr_a =  'A';
foreach ($arr as $key=>$value){
    echo $chr_a++." ... ".$value." <br> ";
}
// extract($arr_new_keys);
echo '
<table>
  <tr> 
    <td>English</td>
    <td>Chinese </td>
  </tr>
  <tr>
    <td></td>
    <td>$arr('A')</td>
  </tr>
  <tr>
    <td></td>
    <td>answer2</td>
  </tr>
  <tr>
    <td></td>
    <td>answer3</td>
  </tr>
  <tr>
    <td></td>
    <td>answer4</td>
  </tr>
</table>';


?>
</body>
</html>