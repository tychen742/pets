<?php

// ##### Get Single Value #####

//class CRUD
//{
//    public static function getSingleValue()
//    {
try {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    function getSingleValue($columnName, $tableName, $prop, $value)
    {
        global $pdo;
        $query = $pdo->query("SELECT `$columnName` FROM `$tableName` WHERE $prop='" . $value . "'");
        $stmt = $query->fetch();
        $result = $stmt[$columnName];
        return $result;
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

//    }
//}

?>