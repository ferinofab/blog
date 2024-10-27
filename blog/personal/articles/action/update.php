<?php
require 'C:\OSPanel\home\market\blog\db.php';

$cat = $_POST['select_cat'];
$name = $_POST['name'];
$text = $_POST['text'];
$id= $_POST['id'];
$cat_id = $pdo->query("SELECT id FROM categories WHERE name='$cat'")->fetch(PDO::FETCH_ASSOC);
$cat_id = $cat_id['id'];
$pdo->query("UPDATE articles SET name='$name', text='$text',category_id ='$cat_id' WHERE id='$id'");
header("Location: /personal/articles/");