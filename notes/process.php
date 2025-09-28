<?php
// Report all PHP errors
error_reporting(- 1);

include ("includes/database.php");

$message = $_POST['message'];
// echo $message; 

try {
    $conec = new Connection();
    $con = $conec->Open();
    
    $sql = "INSERT INTO notes(message) VALUES(:message)";
    $prepared = $con->prepare($sql, array(
        PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY
    ));
    
    if ($prepared->execute(array(
        ':message' => $message
    ))) {
        echo "Posting successful";
        echo '<meta http-equiv=REFRESH CONTENT=3;url=index.php>';
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
// exit(header("Location: index.php"));
?>