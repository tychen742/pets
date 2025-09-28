<html>
<head>
<title> Search </title>
</head>
<body>

<?PHP
//===== DB Connection & Session  =====//
session_start(); 
include("database.php");

$id = $_SESSION['username'];
echo $id, '  ', "<div> <a href = logout.phplogout.php> log out</a></div>";
?>

<div style="width: 500px; margin: 80px auto 0 auto;">
    <form name="form" method="post" action="search_process.php">
    Search word:<input type="text" name="keyword" />
    <input type="submit" name="button" value="Search!" />
    </form>

<?PHP
if($_SESSION['username'] != null)
{
      	

}
else
{
        echo 'Something went wrong! Directing you back to the Login page.';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}

?>
</div>


