<?php
require 'C:\OSPanel\home\market\blog\db.php';
$id = $_GET['id'];
$pdo->query("DELETE FROM categories WHERE id='$id'");
header("Location: /admin/categories/");
