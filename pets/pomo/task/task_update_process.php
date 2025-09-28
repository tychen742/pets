<?php
include_once 'db_conn.php';

$title_taskNew = $_POST['title_taskNew'];

if (empty($_POST['id_task'])) {
    echo "task ID is empty.";
} else {
    $id_task = $_POST['id_task'];
//     echo $id_task;
}

if (empty($title_taskNew)) {
    // echo "........";
    $title_taskError = 'Please enter message.';
    echo $title_taskError;
    // $valid = false;
    //
    // ### // update data
} else {
    // echo $messageNew;
    try {
        
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "UPDATE customers set name = ?, email = ?, mobile =? WHERE id = ?";
    $sql = "UPDATE task SET title_task = ? WHERE id_task = ?";
    $query = $pdo->prepare($sql);
    $query->execute(array(
        $title_taskNew,
        $id_task
    ));
    
    // echo "processed";
    Database::disconnect();
    
    } catch (Exception $e) {
        echo $e;
    }
    header("Location: index.php");
}
?>

<a class="btn" href="../index.php">Back</a>
