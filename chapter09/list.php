<?php
require_once 'DbManager.php';

try {
    $db = getDb();
    $sql = "SELECT isbn, title, price, publish, published
            FROM book
            ORDER BY published DESC";
    $stt = $db->prepare($sql);
    $stt->execute();
} catch (PDOException $e) {
    die("エラーメッセージ: {$e->getMessage()}");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>書籍一覧</title>
</head>
<body>
    <h2>書籍一覧</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ISBNコード</th>
                <th>書名</th>
                <th>価格</th>
                <th>出版社</th>
                <th>刊行日</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
<?php while ($row = $stt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?=$row['isbn'] ?></td>
                <td><?=$row['title'] ?></td>
                <td><?=$row['price'] ?></td>
                <td><?=$row['publish'] ?></td>
                <td><?=$row['published'] ?></td>
                <td>
                    <a href="update_form.php?isbn=<?=$row['isbn'] ?>" class="btn btn-secondary">編集</a>
                </td>
            </tr>
<?php } ?>
        </tbody>
    </table>
</body>
</html>