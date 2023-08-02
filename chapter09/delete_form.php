<?php
require_once 'DbManager.php';

try {
    $db = getDb();
    $sql = "SELECT isbn, title, price, publish, published
            FROM book
            WHERE isbn = :isbn";
    $stt = $db->prepare($sql);
    $stt->bindValue(':isbn', $_GET['isbn']);
    $stt->execute();
    if ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
        ;
    } else {
        die("エラーメッセージ: {$e->getMessage()}");
    }
} catch(PDOException $e) {
    die("エラーメッセージ: {$e->getMessage()}");
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h3>書籍削除</h3>
    <a href="list.php" class="btn btn-success">書籍一覧</a>
    <div class="mx-3">
        <table class="table">
            <tr><th>ISBNコード</th><td><?=$row['isbn'] ?></td></tr>
            <tr><th>書名</th><td><?=$row['title'] ?></td></tr>
            <tr><th>価格</th><td><?=$row['price'] ?></td></tr>
            <tr><th>出版社</th><td><?=$row['publish'] ?></td></tr>
            <tr><th>刊行日</th><td><?=$row['published'] ?></td></tr>
        </table>    
        <form action="delete_process.php" method="post">
            <input type="hidden" name="isbn" value="<?=$row['isbn'] ?>" />
            <input type="submit" name="delete" value="削除" />
            <input type="submit" name="cancel" value="キャンセル" />
        </form>
    </div>
</body>
</html>