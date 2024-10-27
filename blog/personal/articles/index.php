<?php
require 'C:\OSPanel\home\market\blog\db.php';
$articles = $pdo->query("SELECT * FROM articles")->fetchAll(PDO::FETCH_ASSOC);
$categories = $pdo ->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);

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
    <h1>список статей</h1>
    <a href="create.php">Добавить ствтью</a>
    <table>
        <thead>
            <tr>
                <td>№</td>
                <td>name</td>
                <td>category</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article):?>
                <tr>
                    <td><?= $article['id']?></td>
                    <td><?= $article['name']?></td>
                   <?php foreach ($categories as $category):?>
                        <?php if ($category['id'] == $article['category_id']):?>
                            <td>
                                <?= $category['name']?>
                            </td>
                        <?php endif;?>
                    <?php endforeach;?>
                    <td>
                        <a href="action/dalate.php?id=<?= $article['id']?>">delete</a>
                    </td>
                    <td>
                        <a href="edit.php?id=<?=$article['id']?>&name=<?=$article['name']?>&cat_id=<?=$article['category_id']?>&text=<?=$article['text']?>">update</a>
                    </td>

                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>

