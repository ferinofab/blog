<?php
require 'C:\OSPanel\home\market\blog\db.php';
$name_articles = $pdo->query("SELECT * FROM articles")->fetchAll(PDO::FETCH_ASSOC);


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
<h1>список всех ствтей</h1>
<table>
    <tr>
        <td>name</td>
    </tr>
    <?php foreach ($name_articles as $item):?>
    <tr>
            <td><?=$item['name']?></td>
            <td><a href="edit.php?id=<?=$item['id']?>">update</a></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>
