<?php

class Database1
{
    private static $dsn = "mysql:host=localhost;dbname=bookdb";
    private static $username = "root";
    private static $password = "";

    private static $db=null;

    public static function connect()
    {
        try {
            self::$db = new PDO(self::$dsn, self::$username, self::$password);
            echo "cntc";
        } catch (PDOException $e) {
            $e->getMessage();
            echo "khong tc";
        }
        return self::$db;
    }
}