<?php
require_once 'DbManager.php';

// 例外処理
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
        die('該当するISBNコードは存在しません。');
    }
} catch(PDOException $e) {
    die("エラーメッセージ: {$e->getMessage()}");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>書籍編集 | ○○書店</title>
</head>
<body>
    <h3>書籍編集</h3>
    <a href="list.php" class="btn btn-success">書籍一覧</a>
    <form action="update_process.php" method="post">
        <div>
            <label for="isbn">ISBNコード: </label><br>
            <input type="text" name="isbn" id="isbn" readonly
                value="<?=$row['isbn'] ?>" />
        </div>
        <div>
            <label for="title">タイトル: </label><br>
            <input type="text" name="title" id="title"
                value="<?=$row['title'] ?>" />
        </div>
        <div>
            <label for="price">価格: </label><br>
            <input type="text" name="price" id="price"
                value="<?=$row['price'] ?>" />
        </div>
        <div>
            <label for="publish">出版社: </label><br>
            <input type="text" name="publish" id="publish"
                value="<?=$row['publish'] ?>" />
        </div>
        <div>
            <label for="published">刊行日: </label><br>
            <input type="text" name="published" d="published"
                value="<?=$row['published'] ?>" />
        </div>
        <input type="submit" value="更新" />
    </form>
</body>
</html>