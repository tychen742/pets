<html>
<head>
<title> Search </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<?php session_start(); ?>
    <body>
<?php
include("db_conn.php");

$keyword = $_POST['keyword'];
$keyword = mysql_real_escape_string($keyword);

$query = "SELECT * from lynn.pydict WHERE grain = '$keyword'" or die("Error in the consult.." . mysqli_error($conn_iss));

//execute the query. 

$result = $conn_iss->query($query);

//display information: 
if(!empty($result)){
while($row = mysqli_fetch_array($result)) { 
    echo $row['grain'];
    echo '<br>';
    echo $row['chinese'];
} 
}
else
{
 var_dump($result);
 echo 'You cannot find the word!';
}

echo "<div> <a href = search.php>Search other words</a></div>";
/*
global $a;
header("Content-Type:text/html; charset=utf-8");
includes("db_conn.php");


$keyword = $_POST['keyword'];
var_dump($keyword);
//$keyword = mysql_real_escape_string($keyword);
//$sql = "SELECT * from lynn.pydict WHERE grain LIKE '%$keyword%'";
$sql = "select * from lynn.testing";
//echo $sql;
//$result = mysql_query($sql, $a)or die(mysql_error());
$result = $a->query($sql);
//$result = mysql_real_escape_string($result);
//echo $result;
while($row = mysql_fetch_array($result))
{
    var_dump($row);
//    echo $row["master_id"];
//    echo $row['grain'];
//
//    echo $row['chinese'];
}*/
/*
$result = mysql_query("SELECT * FROM pydict
WHERE grain LIKE '.$keyword.'");


if(!empty($result)){

    while($row = mysql_fetch_array($result))
  {
  echo $row['grain'];
  echo "<br />";
  }
}
*/


?>
</body>
</html>