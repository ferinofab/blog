<?php
require 'C:\OSPanel\home\market\blog\db.php';
$id = $_GET['id'];
$info = $pdo->query("SELECT * FROM articles WHERE id='$id'")->fetchAll(PDO::FETCH_ASSOC);


?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Инфориацтя по выбоанной статье</h1>


<?php foreach ($info as $item):?>
    <h2>Название - <?= $item['name']?></h2>
    <p>Ткекст ствтьи - <?=$item['text']?></p>
    <p>прошлп ли статья модкрауию -
    <?php if($item['is_moderated'] == 0):?>
        <?="нкт"?>
    <?php elseif ($item['is_moderated'] == 1 ):?>
        <?="да"?>
    <?php endif;?>
    </p>
<?php endforeach;?>
</body>
</html>