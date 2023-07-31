<?php
require_once 'DbManager.php';

session_start();

try {
    $db = getDb();
    /*
    :isbnや:titleのことをplaceholderと呼び、後で値を埋め込む
    もののことを指す。直接値を埋め込むとSQLインジェクション攻撃を
    受ける可能性がある。それを防ぐのがplaceholderと$stt->bindValue。
    */
    $sql = "INSERT INTO book(isbn, title, price, publish, published)
            VALUES(:isbn, :title, :price, :publish, :published)";
    $stt = $db->prepare($sql);
    // この5つのbindValueを使ってSQLに値を埋め込んでいる
    $stt->bindValue(':isbn', $_POST['isbn']);
    $stt->bindValue(':title', $_POST['title']);
    $stt->bindValue(':price', $_POST['price']);
    $stt->bindValue(':publish', $_POST['publish']);
    $stt->bindValue(':published', $_POST['published']);
    $stt->execute();
    $_SESSION['message'] = '登録に成功しました。';
    header('Location: http://' . $_SERVER['HTTP_HOST']
        . dirname($_SERVER['PHP_SELF']) . '/insert_form.php');
} catch (PDOException $e) {
    die("エラーメッセージ: {$e->getMessage()}");
}