<?php
require_once 'DbManager.php';

try {
    $db = getDb();
    $sql = "UPDATE book
            SET title = :title, price = :price, publish = :publish, published = :published
            WHERE isbn = :isbn";
    $stt = $db->prepare($sql);
    $stt->bindValue(':title',     $_POST['title']);
    $stt->bindValue(':price',     $_POST['price']);
    $stt->bindValue(':publish',   $_POST['publish']);
    $stt->bindValue(':published', $_POST['published']);
    $stt->bindValue(':isbn',      $_POST['isbn']);
    $stt->execute();

    $_SESSION['message'] = '更新に成功しました。';
    header('Location: http://' . $_SERVER['HTTP_HOST']
        . dirname($_SERVER['PHP_SELF']) . '/list.php');
} catch(PDOException $e) {
    die("エラーメッセージ: {$e->getMessage()}");
}