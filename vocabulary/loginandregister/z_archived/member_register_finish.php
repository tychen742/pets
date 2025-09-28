<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("db_conn.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$telephone = $_POST['telephone'];
$email= $_POST['email'];
//$other = $_POST['other'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        //新增資料進資料庫語法
        $sql = "INSERT INTO pec.users(username, password, phone, email) VALUES ('$id', '$pw', '$phone', '$email')";
        if(mysqli_query($conn_iss, $sql))
        {
                echo 'Account is successfully created!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
        }
        else
        {
                echo 'Account creation failed!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
        }
}
else
{
        echo 'Something went wrong! You will be routed to the Login page';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>