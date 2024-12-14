<?php
// ##### Get Single Value #####
//$pdo = Database::connect();
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function getSingleValue($tableName, $columnName, $proj, $value)
{
    global $pdo;
    $query = $pdo->query("SELECT '$columnName' FROM '$tableName' WHERE $proj='" . $value . "'");
    $stmt = $query->fetch();
    $result = $stmt[$columnName];
    return $result;
}

?>

<?php
function validate_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>