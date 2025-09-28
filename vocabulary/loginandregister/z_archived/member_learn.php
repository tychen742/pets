<html>
<head>
<title> PEC </title>
</head>
<body>

<?PHP
//===== DB Connection & Session  =====//
session_start(); 
include("db_conn.php");

$id = $_SESSION['username'];
echo $id, '  ', "<div> <a href = logout.php> log out</a></div>";
?>

<div style="width: 500px; margin: 80px auto 0 auto;">

<?PHP
if($_SESSION['username'] != null)
{
        //echo '<a href="register.php">�憓�</a>    ';
        //echo '<a href="update.php">靽格</a>    ';
        //echo '<a href="delete.php">��</a>  <br><br>';
		//echo '<a href = "http://140.135.112.75/flashcard_TOEFL_IS600_chinese_08_31_2014.php"> 08-31-2014 </a> <br>';
		//echo '<a href="logout.php">log out</a>  <br><br>';
        //撠��澈鋆∠�����鞈�＊蝷箏��銝�
        // $sql = "SELECT * FROM users";
        // $result = mysql_query($sql);
        // while($row = mysql_fetch_row($result))
        // {
                 // echo "$row[2] - ����(撣唾��)嚗�$row[2], " . 
                 // "�閰梧��$row[4] <br>";
        // }
		
		//echo '<a href = "http://140.135.112.75/flashcard_TOEFL_IS600_chinese_09_01_2014.php"> TOEFL Iowa State 600 </a>';
		echo '<a href = "http://polochen.com/toefl_mc_e_c.php"> TOEFL Iowa State 600 </a>','<br>','<br>';
		echo '<a href = "http://polochen.com/hs_7000.php"> MOE High School 7000</a>' , '<br>' ,' <br>' ;
		echo '<a href = "http://polochen.com/dictionary.php"> Dictionary </a>';
		

}
else
{
        echo 'Something went wrong! Directing you back to the Login page.';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}

?>
</div>


