<?PHP

//print_r($_POST);
if (isset($_POST['input_name'] , $_POST['input_age'])) {
//	echo 'OK';
	$name = htmlentities ($_POST['input_name'], ENT_QUOTES, 'UTF-8');
	$age = $_POST['input_age'];
	
	echo "You are $name and you are $age years old.";

}

?>

<form action = "tt.php" method = "POST">

	<input type = "text" name = "input_name" placeholder = "name">
	<input type = "text" name = "input_age" placeholder = "age">

	<input type = "submit">


</form>

<?PHP

// $name = 'Alex';
// $nameChanged = '';

// $action = '';

// switch($action) {
	// case 'upper':
		// $nameChanged = strtoupper($name);
		// break;
	// case 'lower':
		// $nameChanged = strtolower($name);
		// break;
	// default:
		// $nameChanged = $name;
		// break;
// }

// echo $nameChanged;

?>

<?PHP
// function name ($string) {
	// $results = array(
		// 'upper' => strtoupper($string),
		// 'lower' => strtolower($string),
	// );
	// return $results;
// } 

// // $name = name('Alex');
// // echo 

// print_r(name('this'));
// echo '<br>';
// $name = (name('that'));
// echo $name['upper'];

// $fetch = mysqli_fetch_assoc($that);
// echo $name [upper];

//string('Alex', function() {
//	echo $name ['upper'];
//	});
?>