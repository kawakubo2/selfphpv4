<?php
require_once 'DbManager.php';

if (isset($_POST['cancel'])) {
    header('Location: http://' . $_SERVER['HTTP_HOST']
        . dirname($_SERVER['PHP_SELF']) . '/list.php');
    exit();
}
try {
    $db = getDb();
    $sql = "DELETE FROM book
            WHERE isbn = :isbn";
    $stt = $db->prepare($sql);
    $stt->bindValue(':isbn', $_POST['isbn']);
    $stt->execute();
    $_SESSION['message'] = '削除に成功しました。';
    header('Location: http://' . $_SERVER['HTTP_HOST']
        . dirname($_SERVER['PHP_SELF']) . '/list.php');
} catch(PDOException $e) {
    die("エラーメッセージ: {$e->getMessage()}");
}