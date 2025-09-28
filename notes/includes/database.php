<?php

class Database
{

    private static $dbName = 'polochen_notes';

    private static $dbHost = 'localhost';

    private static $dbUsername = 'polochen_tychen';

    private static $dbUserPassword = 'redcar';

    private static $options = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    );
 // Gee, this matters!
    private static $conn = null;

    public function __construct()
    {
        die('Init function is not allowed');
    }

    public static function connect()
    {
        // One connection through whole application
        if (null == self::$conn) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUsername, self::$dbUserPassword, self::$options);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$conn;
    }

    public static function disconnect()
    {
        self::$conn = null;
    }
}
?>