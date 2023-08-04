<?php
require_once 'DbManager.php';

session_start();
//////////////////////////////////////////////////////////////
// フォームデータをセッションに保存
//////////////////////////////////////////////////////////////
$_SESSION['isbn']      = $_POST['isbn'];
$_SESSION['title']     = $_POST['title'];
$_SESSION['price']     = $_POST['price'];
$_SESSION['publish']   = $_POST['publish'];
$_SESSION['published'] = $_POST['published'];

//////////////////////////////////////////////////////////////
// 入力値検証(バリデーション)
//////////////////////////////////////////////////////////////
function is_empty($str): bool {
    if (trim(str_replace('　', '', $str)) === '') {
        return true;
    }
    return false;
}

$errors = []; // エラーメッセージを格納するための

if (is_empty($_SESSION['isbn'])) {
    $errors[] = 'ISBNコードは必須入力です';
} else {
    if (!preg_match('/^978-4-[0-9]{2,6}-[0-9]{2,6}-[0-9]$/', $_SESSION['isbn'])) {
        $errors[] = 'ISBNコードの書式に誤りがあります。';
    }
}

if (is_empty($_SESSION['title'])) {
    $errors[] = '書名は必須入力です';
}
if (mb_strlen($_SESSION['title']) > 50) {
    $errors[] = '書名は50文字以内で入力してください。';
}

if (is_empty($_SESSION['price'])) {
    $errors[] = '価格は必須入力です。';
}
if (!ctype_digit($_SESSION['price'])) {
    $errors[] = '価格は整数値を入力してください、。';
}

if (is_empty($_SESSION['publish'])) {
    $errors[] = '出版社は必須入力です';
}
if (mb_strlen($_SESSION['publish']) > 50) {
    $errors[] = '出版社は50文字以内で入力してください。';
}

if (is_empty($_SESSION['published'])) {
    $errors[] = '刊行日は必須入力です。';
}
$ymd = explode('-', $_SESSION['published']);
if (count($ymd) !== 3) {
    $errors[] = '刊行日は「-」で区切ってください(例 2023-08-04)';
}
if (!checkdate((int)$ymd[1], (int)$ymd[2], (int)$ymd[0])) {
    $errors[] = '刊行日が暦上存在しません。';
}

if (count($errors) > 0) {
    $_SESSION['insert_errors'] = $errors;
    header('Location: http://' . $_SERVER['HTTP_HOST']
        . dirname($_SERVER['PHP_SELF']) . '/insert_form.php');
    exit();
}

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