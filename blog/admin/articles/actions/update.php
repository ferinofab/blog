<?php
require 'C:\OSPanel\home\market\blog\db.php';
$id = $_POST['id'];

$is_moder = $_POST['moder'];

if($is_moder == 1){
    $pdo->query("UPDATE articles SET is_moderated=1 WHERE id='$id'");
}elseif ($is_moder == 0){
    $pdo->query("UPDATE articles SET is_moderated=0 WHERE id='$id'");

}
header("Location:/admin/articles/");