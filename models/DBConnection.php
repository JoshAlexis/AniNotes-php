<?php 

    define('DB_HOST', 'localhost');
    define('DB_NAME', 'aninotes');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    $con = null;
    try {
        $dsn = "mysql:host=${DB_HOST};dbname=${DB_NAME}";
        $con = new PDO($dsn, DB_USER, DB_PASS);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

