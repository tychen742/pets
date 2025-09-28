<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?PHP
session_start(); 
$id = $_SESSION['username'];
echo $id;

include("mysql_connect.inc.php");
?>

<div style="width: 500px; margin: 80px auto 0 auto;">

<?PHP


//echo '<br>';
 

//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['username'] != null)
{
        //echo '<a href="register.php">新增</a>    ';
        //echo '<a href="update.php">修改</a>    ';
        //echo '<a href="delete.php">刪除</a>  <br><br>';
		//echo '<a href = "http://140.135.112.75/flashcard_TOEFL_IS600_chinese_08_31_2014.php"> 08-31-2014 </a> <br>';
		//echo '<a href="logout.php">log out</a>  <br><br>';
        //將資料庫裡的所有會員資料顯示在畫面上
        // $sql = "SELECT * FROM users";
        // $result = mysql_query($sql);
        // while($row = mysql_fetch_row($result))
        // {
                 // echo "$row[2] - 名字(帳號)：$row[2], " . 
                 // "電話：$row[4] <br>";
        // }
		
		echo '<a href = "http://140.135.112.75/flashcard_TOEFL_IS600_chinese_09_01_2014.php"> TOEFL Iowa State 600 </a>';
	
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}



?>
</div>


