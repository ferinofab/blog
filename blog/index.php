<?php
require 'C:\OSPanel\home\market\blog\db.php';
$articles = $pdo->query("SELECT * FROM articles WHERE is_moderated=1")->fetchAll(PDO::FETCH_ASSOC);

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
<h1> вывод списка статей, которые прошли модерацию</h1>
<table>
    <thead>
        <tr>
            <td>№</td>
            <td>name</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($articles as $article):?>
            <tr>
                <td><?= $article['id']?></td>
                <td><?= $article['name']?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
</body>
</html>