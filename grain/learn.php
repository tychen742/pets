<?php session_start(); ?>

<?PHP
//===== DB Connection & Session  =====//
// if (session_status() == PHP_SESSION_NONE) {
// 	session_start(); 
// }

include("includes/db_conn.php");

$id = $_SESSION['username'];
echo $id, '  ', "<div> <a href = logout.phplogout.php> log out</a></div>";
?>

<div style="width: 500px; margin: 80px auto 0 auto;">

<?PHP
if($_SESSION['username'] != null)
{
        //echo '<a href="register.php">Text1</a>    ';
        //echo '<a href="update.php">Text2</a>    ';
        //echo '<a href="delete.php">Text3</a>  <br><br>';
		//echo '<a href = "http://140.135.112.75/flashcard_TOEFL_IS600_chinese_08_31_2014.php"> 08-31-2014 </a> <br>';
		//echo '<a href="logout.php">log out</a>  <br><br>';
        //Ã¦â€™Â Ã¯â€¹Â¬Ã¯Â¿Â½Ã¯â€¹ÂªÃ¯Â¿Â½Ã®Â©â€œÃ¦Â¾Ë†Ã©â€¹â€ Ã¢Ë†Â Ã¯Â¿Â½Ã¯â€žâ€œÃ¯Â¿Â½Ã¯Â¿Â½Ã¯Â¿Â½Ã¯ï¿½Â¤Ã¯Â¿Â½Ã¯ï¿½ÂµÃ®â„¢Â¡Ã©Å¾Ë†Ã¯â€¹ÂªÃ¯Â¿Â½Ã®Â©â€”Ã¯Â¼Å Ã¨ï¿½Â·Ã§Â®ï¿½Ã®Â¯Â­Ã¯Â¿Â½Ã®Å¾Â¥Ã¯Â¿Â½Ã®Â²â€žÃ©Å ï¿½Ã¯Â¿Â½
        // $sql = "SELECT * FROM users";
        // $result = mysql_query($sql);
        // while($row = mysql_fetch_row($result))
        // {
                 // echo "$row[2] - Ã¯Â¿Â½Ã¯Â¿Â½Ã¯Å¡â€”Ã¯Â¿Â½Ã¯Â¿Â½(Ã¦â€™Â£Ã¥â€�Â¾Ã¯Â¿Â½Ã¯Â¿Â½)Ã¥Å¡â€”Ã¯Â¿Â½$row[2], " . 
                 // "Ã¯Â¿Â½Ã®Â­Â£Ã©â€“Â°Ã¦Â¢Â§Ã¯Â¿Â½Ã¯Â¿Â½$row[4] <br>";
        // }
		
		//echo '<a href = "http://140.135.112.75/flashcard_TOEFL_IS600_chinese_09_01_2014.php"> TOEFL Iowa State 600 </a>';
		echo '<a href = "http://bashnet.us/pec/toefl_mc_e_c.php" value="TOEFL Iowa State 600">  </a> <br>';
		echo '<a href = "http://bashnet.us/pec/hs7000.php" value="MOE High School 7000"> </a> <br>' ;
		echo '<a href = "http://bashnet.us/pec/barrons333.php"> Barron\'s 333 </a> <br>' ;
		echo '<a href = "http://bashnet.us/pec/dictionary.php" value="Dictionary "> </a>';
		

}
else
{
        echo 'Something went wrong! Directing you back to the Login page.';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}

?>
</div>


