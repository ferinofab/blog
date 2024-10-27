<?php
require 'C:\OSPanel\home\market\blog\db.php';
$categories = $pdo->query("SELECT name FROM categories")->fetchAll(PDO::FETCH_ASSOC);
$id = $_GET['id'];
$name = $_GET['name'];
$cat_id = $_GET['cat_id'];
$text = $_GET['text'];

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
    <input type="text" value="<?=$name?>" name="name">
    <input type="text" value="<?=$text?>" name="text">
    <select name="select_cat">
        <?php foreach ($categories as $category):?>
            <option value="<?=$category['name']?>"><?=$category['name']?></option>
        <?php endforeach;?>
    </select>
    <input type="hidden" value="<?=$id?>" name="id">
    <input type="submit">
</form>
</body>
</html>
