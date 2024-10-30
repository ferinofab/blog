<?php
session_start();
require '../db.php';
$pass = $_POST['pass'];
$rep_pass = $_POST['rep_pass'];
$login = $_POST['login'];

$select = $pdo ->query("SELECT * FROM users WHERE login='$login' AND password='$pass'")->fetch(PDO::FETCH_ASSOC);

if(isset($select['id'])){
    echo "вы зареганы уже";
}else{
    $query = $pdo->query("INSERT INTO users (login, password) VALUES ('$login', '$pass')");
    header("Location: /personal/index.php");
}
$_SESSION['user_id'] = $select['id'];


