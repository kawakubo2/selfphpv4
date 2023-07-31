<?php
function getDb(): PDO {
    $dsn = 'mysql:dbname=selfphpv4_uemura; host=127.0.0.1; charset=utf8';
    $usr = 'root';
    $passwd = 'root';

    try {
        $db = new PDO($dsn, $usr, $passwd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        die("接続エラー: {$e->getMessage()}");
    } 
    return $db;
}