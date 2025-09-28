<?php
$charset = 'utf8mb4';

$host = "localhost";
$dbname = "pomo";

$dbuser = "pomo";
$password = "redcar@2019";

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,        // throw PDOException
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $dbuser, $password, $options);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}
?>
<?php

//class Database
//{
//
//    private static $dbHost = 'localhost';
//    private static $dbName = 'pomo';
//    private static $dbUsername = 'pomo';
//    private static $dbUserPassword = 'redcar@2019';
//
//    private static $options = array(
//        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
//    );
// // Gee, this matters!
//    private static $pdo = null;
//
//    public function __construct()
//    {
//        die('Init function is not allowed');
//    }
//
//    public static function connect()
//    {
//        $options = [
//            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,        // throw PDOException
//            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//            PDO::ATTR_EMULATE_PREPARES => false,
//        ];
//        // One connection through whole application
//        if (null == self::$pdo) {
//            try {
//                self::$pdo = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword, self::$options);
//            } catch (PDOException $e) {
//                die($e->getMessage());
//            }
//        }
//        return self::$pdo;
//    }
//
//    public static function disconnect()
//    {
//        self::$pdo = null;
//    }
//}
?>