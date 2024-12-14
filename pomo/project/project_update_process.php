<?php
include_once 'db_conn.php';

$title_projectNew = $_POST['title_projectNew'];

if (empty($_POST['id_project'])) {
    echo "Project ID is empty.";
} else {
    $id_project = $_POST['id_project'];
//     echo $id_project;
}

if (empty($title_projectNew)) {
    // echo "........";
    $title_projectError = 'Please enter message.';
    echo $title_projectError;
    // $valid = false;
    //
    // ### // update data
} else {
    // echo $messageNew;
    try {
        
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "UPDATE customers set name = ?, email = ?, mobile =? WHERE id = ?";
    $sql = "UPDATE project SET title_project = ? WHERE id_project = ?";
    $query = $pdo->prepare($sql);
    $query->execute(array(
        $title_projectNew,
        $id_project
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
