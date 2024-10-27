<?php
require 'C:\OSPanel\home\market\blog\db.php';
$id = $_GET['id'];
echo $id;
$pdo->query("DELETE FROM articles WHERE id='$id' ");
header("Location: /personal/articles/");

