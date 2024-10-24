<?php
require 'C:\OSPanel\home\market\blog\db.php';

$name_cat = $_POST['name_cat'];
$pdo->query("INSERT INTO categories (name) VALUES ('$name_cat')");
header("Location: /admin/categories/");
