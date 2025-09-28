<html>
<head> <title>PEC Dictionary</title>
<style>
body{
	background-color: grey;
    padding: 2px ;
    border: 10px solid white;
    margin-left: 10%;
    margin-right: 10%;
}
ul {
    float: left;
    width: 100%;
    padding: 0;
    margin: 5px;
    list-style-type: none;
}

a {
    float: left;
    width: 6em;
    text-decoration: none;
	text-align: center;
    color: white;
    background-color: grey;
    padding: 0.2em 0.6em;
    border-right: 1px solid white;
}

a:hover {
    background-color: darkgrey;
}

li {
    display: inline;
}
top_line{
	position: absolute;
	right: 15%;
	top:25px;
	margin: 5px;
	font-family: "Times New Roman";
	font-size: 16px;

}
#input_box{
	margin: 2px;
	padding: 2px;
	position: absolute;
	left: 35%;
	top: 100px;
}
#output_English{
	margin: 2px;
	padding: 2px;
	position: absolute;
	left: 35%;
	top: 135px;
	width: 300px;
	font-size: 20px; 
}
#output_Chinese{
	margin: 2px;
	padding: 2px;
	position: absolute;
	left: 35%;
	top: 160px;
	width: 300px;
}
</style>
</head>
<body> 
<?php
// ===== Session =====
include("function_box.php");
session_start();
$id = $_SESSION['username'];
// $session_expiration = time() + 3600 * 24 * 2; // +2 days
// session_set_cookie_params($session_expiration);
if (session_status() == PHP_SESSION_NONE) {
	session_start();
	}
?>
<ul>
<!-- <li> <a href = member_learn.php> Home </a></div> -->
<!-- <li> <a href = "http://polochen.com/yueh/pec.php">PEC </a> </li> -->
<!-- <li> <a href = "http://polochen.com/toefl_mc_e_c.php">TOEFL </a> </li> -->
<!-- <li> <a href = "http://polochen.com/hs_7000.php">MOE.HS 7000 </a> </li> -->
<!-- <li> <a href = "http://polochen.com/dictionary.php">Dictionary </a> </li> -->
</ul>
<?PHP 
echo "<top_line> &nbsp;&nbsp;&nbsp;&nbsp; $id <a href = 'http://polochen.com/logout.php'> exit </a> </top_line>";
?>

<?PHP
//===== DB Connection =====
include("database.php");

//===== Create/Point to user score table =====
$personal_dict = $id.'_'.'dict_lookup';

// ===== Create User Score  Table ===== //
$query_tbl = "SELECT * FROM information_schema WHERE TABLE_NAME = $personal_dict " ;
// $query_tbl_result = ;
if (($conn_iss->query($query_tbl)) == 0  ) {
	$query_create_table = 
		"CREATE TABLE $personal_dict 
		(id INT (11) NOT NULL,
		english varchar(35), 
		chinese varchar (100),
		times INT (10) NOT NULL DEFAULT '0',
		PRIMARY KEY (id),
		FOREIGN KEY (id) REFERENCES pydict(master_id)
		)";
	$conn_iss->query($query_create_table);
	}
?>


<!-- Form for input -->
<form action="" method="post">
	<div id="input_box">
	<input type="text" name="inputText" >
	<input type="submit" name="SubmitButton" value="lookup">
	</div>
</form>    

<?PHP
// ===== FORM =====  
//���Ӱ����ӤH�r��æ��έp�A�~�వAI)
if(isset($_POST['SubmitButton']))
{ //check if form was submitted
	$input = $_POST['inputText']; //get input text
//	echo "Success! You entered: ".$input;

$lookup_sql = "SELECT master_id, english, chinese FROM pydict WHERE english = '$input' ";
$lookup_query = $conn_iss->query($lookup_sql);
$lookup_result = mysqli_fetch_array ($lookup_query);
$chinese = $lookup_result['chinese'];
$english = $lookup_result['english'];

$check_personal_query = "SELECT english FROM '$personal_dict' WHERE english = '$english'";
$check_personal_result = $conn_iss->query($check_personal_query);
// $check_personal_row = $check_personal_result->fetch_array(MYSQLI_NUM);
// 		�ܼƦp�G�O�bSQL�̭��A�n�[' '
If ($check_personal_result == null) {
// 	echo 'check';
 	mysqli_query ($conn_iss, "INSERT INTO $personal_dict (id, english, chinese) 
		SELECT master_id, english, chinese 
		FROM pydict
		WHERE pydict.english = '$english' 
		");
 	mysqli_query ($conn_iss, "UPDATE $personal_dict SET times = times + 1 WHERE english = '$english' ");
	}
echo "<div id='output_English'>$english </div>";
echo "<div id='output_Chinese'>$chinese </div>";
}

?>
</body>
</html>