<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの登録</title>
</head>
<body>
    <h3>書籍のデータの登録</h3>
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