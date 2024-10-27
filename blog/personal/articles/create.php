<?php
require 'C:\OSPanel\home\market\blog\db.php';
$categories = $pdo->query("SELECT name FROM categories")->fetchAll(PDO::FETCH_ASSOC);

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
    <form action="action/store.php" method="post">
        <input type="text" placeholder="название статьи" name="name_article"><br>
        
        <textarea placeholder="текст статьи" name="text"></textarea>
        <p>выберете категорию</p>
        <select name="select_cat">
            <option></option>
            <?php foreach ($categories as $category):?>
                <option value="<?=$category['name']?>"><?=$category['name']?></option>
            <?php endforeach;?>
        </select>
        <input type="submit">
    </form>
</body>
</html>
