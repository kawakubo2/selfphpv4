<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>データの登録</title>
</head>
<body>
    <h3>書籍のデータの登録</h3>
    <a href="list.php" class="btn btn-success">書籍一覧</a>
    <?php
        if (isset($_SESSION['message'])) {
            print("<p>{$_SESSION['message']}</p>");
            unset($_SESSION['message']);
        }
    ?>
    <form action="insert_process.php" method="post">
        <div>
            <label for="isbn">ISBNコード</label><br>
            <input type="text" name="isbn" id="isbn" size="35" maxlength="150" />
        </div>
        <div>
            <label for="title">書名: </label><br>
            <input type="text" name="title" id="title" size="35" maxlength="150"/>
        </div>
        <div>
            <label for="price">価格:</label><br>
            <input type="text" name="price" id="price" size="6" maxlength="5"/>
        </div>
        <div>
            <label for="publish">出版社: </label><br>
            <input type="publish" name="publish" id="publish" size="25" maxlength="30"/>
        </div>
        <div>
            <label for="poblished">刊行日:</label><br>
            <input type="text" name="published"
                id="published" size="15" maxlenght="10" />
        </div>
        <input type="submit" value="登録" />
    </form>
</body>
</html>