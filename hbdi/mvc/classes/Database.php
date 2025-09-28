<?php

class Database
{
    public static $host = 'localhost';
    public static $dbname = 'hbdi';
    public static $username = 'hbdi';
    public static $password = 'passwd@2020';
    public static $charset = "utf8";

    private static function connect()
    {
        $host = self::$host;
        $dbname = self::$dbname;
        $username = self::$username;
        $password = self::$password;
        $charset = self::$charset;

        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
        $pdo = new PDO("$dsn", "$username", "$password");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public function query($query, $params = array())
    {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if (explode(' ', $query)[0] == 'SELECT') {
            $data = $statement->fetchAll();
            return $data;
        }
    }

}