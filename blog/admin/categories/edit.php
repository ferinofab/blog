<?php
require 'C:\OSPanel\home\market\blog\db.php';
$id = $_GET['id'];
$name_cat = $pdo->query("SELECT name FROM categories WHERE id='$id'")->fetchAll(PDO::FETCH_ASSOC);

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
    <form action="action/update.php" method="post">
        <?php foreach ($name_cat as $item):?>
            <input name="name" type="text" value="<?= $item['name']?>">
        <?php endforeach;?>
        <input type="hidden" name="id" value="<?= $id?>">
        <input type="submit">
    </form>
</body>
</html>
