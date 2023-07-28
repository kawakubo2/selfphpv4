<?php
$dsn = 'mysql:dbname=selfphpv4_uemura; host=127.0.0.1; charset=utf8';
$usr = 'root';
$passwd = 'root';

try {
    $db = new PDO($dsn, $usr, $passwd);
    print('接続に成功しました。');
} catch(PDOException $e) {
    die("接続エラー: {$e->getMessage()}");
} finally {
    $db = null;
}