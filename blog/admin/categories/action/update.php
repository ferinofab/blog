<?php
require 'C:\OSPanel\home\market\blog\db.php';
$name = $_POST['name'];
$id = $_POST['id'];
$pdo->query("UPDATE categories SET name='$name' WHERE id='$id'");
header("Location: /admin/categories/");
