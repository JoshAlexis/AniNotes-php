<?php 
class DBConnection{
    public static function connect(): PDO{
        $DB_HOST = 'localhost';
        $DB_NAME = 'aninotes';
        $DB_USER = 'root';
        $DB_PASS = '';
        $con = null;
        try {
            $dsn = "mysql:host={$DB_HOST};dbname={$DB_NAME}";
            $con = new PDO($dsn, $DB_USER, $DB_PASS);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $con;
    }
}

