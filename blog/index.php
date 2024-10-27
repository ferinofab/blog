<?php
require 'C:\OSPanel\home\market\blog\db.php';
$articles = $pdo->query("SELECT * FROM articles WHERE is_moderated=1")->fetchAll(PDO::FETCH_ASSOC);
$categories = $pdo->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC);

/*filter*/
$select_id = $_POST['select']?? null;


$result_data = $pdo->query("SELECT * FROM articles WHERE category_id='$select_id' AND  is_moderated=1")->fetchALL(PDO::FETCH_ASSOC);


$name_cat = $pdo->query("SELECT name FROM categories WHERE id='$select_id'")->fetch(PDO::FETCH_ASSOC);

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
<p>FILTER</p>
<form  method="post">
    <select name="select" id="">
        <option value=""></option>
        <?php foreach ($categories as $category):?>
            <option value="<?= $category['id']?>" name="select"><?= $category['name']?></option>
        <?php endforeach;?>
    </select>
    <input type="submit" value="Применить">
</form>

<table>
    <thead>
        <tr>
            <td>№</td>
            <td>name</td>
        </tr>
    </thead>
    <tbody>
    <?php if($select_id == null):?>
    <p>Все записи</p>
        <?php foreach ($articles as $article):?>
            <tr>
                <td><?= $article['id']?></td>
                <td>
                    <a href="article.php?id=<?=$article['id']?>"><?= $article['name']?></a>
                </td>
            </tr>
        <?php endforeach;?>
    <?php else:?>
    <p>Записи по категории: <?= $name_cat['name'] ?></p>
        <?php foreach($result_data as $item):?>
        <tr>
            <td>
                <a href="article.php?id=<?=$item['id']?>"><?=$item['name']?></a>

            </td>
        </tr>
    <?php endforeach;?>
    <?php endif;?>
    </tbody>
</table>
</body>
</html>