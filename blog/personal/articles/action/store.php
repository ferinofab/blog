<?php
require 'C:\OSPanel\home\market\blog\db.php';
$name_article = $_POST['name_article'];
$text= $_POST['text'];
$select_cat = $_POST['select_cat'];

$cat_id = $pdo->query("SELECT id FROM categories WHERE name='$select_cat'")->fetch(PDO::FETCH_ASSOC);
$cat_id = $cat_id['id'];
$pdo->query("INSERT INTO articles (name, text, category_id ) VALUES ('$name_article' , '$text', '$cat_id')");
header("Location: /personal/articles/");


