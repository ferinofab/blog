<?php
require 'C:\OSPanel\home\market\blog\db.php';
$categories = $pdo->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Список категорий</h1>
    <a href="create.php">Add category</a>
    <table>
        <thead>
            <tr>
                <td>№</td>
                <td>Название</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category):?>
                <tr>
                    <td>
                        <?= $category['id']?>
                    </td>
                    <td>
                        <?= $category['name']?>
                    </td>
                    <td>
                        <a href="action/delete.php?id=<?=$category['id']?>">delete</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?=$category['id']?>">update</a>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
