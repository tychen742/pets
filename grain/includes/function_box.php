<?PHP
//===== DB Connection =====
include("db_conn.php");

// ===== Start Session ===== //
function session () {
session_start(); 
$id = $_SESSION['username'];
}
// ===== Pick 1 Word function ===== //
function pickWord($conn) {
	$array = $conn->query("SELECT * FROM TOEFL_IS_600 ORDER BY RAND() LIMIT 1") ->fetch_array();
	return $array;
	}

// ===== find Chinese function ===== //
function findChinese($conn, $word) {
	$array = $conn->query("SELECT english, chinese FROM pydict 
				WHERE english = '$word' ") ->fetch_array();
	return $array['chinese'];
	}

// ===== create MOE 7000 Score Table	===== //
// function score_table_creation_7000 ($conn) {
	// // SELECT 1 FROM $id.'_'.moe_7000 LIMIT 1;
	// if SHOW TABLES LIKE '$id.'_'.moe_7000' <> Null) {
		// echo 'hi';
	// }
// }
	
?>