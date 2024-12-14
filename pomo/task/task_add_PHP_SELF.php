
<!-- ////// include DB ////// -->
<?php include 'db_conn.php';?>


<?php

// define variables and set to empty values
$task_title = "";

// //// Verification for SECURITY //////
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_title = test_input($_POST["task_title"]);
}

// //// THIS IS WHY WE NEED TO LEARN PROGRAMMING //////
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Add Task</h2>

<!--   ////// HTML FORM ////// -->

<form method="post"
	action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	Task Title: <input type="text" name="task_title"> <input type="submit"
		name="submit" value="Submit"> <input type="reset" value="Clear">
</form>

<?php
// //// inserting data form Form into DB
try {
    require_once 'db_conn.php';
    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    // SO STUPID you need to put ' ' around the variable.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO task (title)
    VALUES ('$task_title')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "You sucessfully added new task: ";
    echo $task_title . '<br>' . '<br>';
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

// //// close DB //////
$conn = null;
?>

<!-- ////// Back Home ////// -->
<form action="../index.php">
	<input type="submit" value="Home" />
</form>

</body>
</html>