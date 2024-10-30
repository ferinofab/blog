<?php
session_start();
require '../db.php';
$login = $_POST['login'];
$pass = $_POST['pass'];
$query = $pdo->query("SELECT * FROM users WHERE login='$login' AND password='$pass'")->fetch(PDO::FETCH_ASSOC);
$_SESSION['user_id'] = $query['id'];

if($query){

    header("Location: /personal/index.php");
}else{
    header("Location: /veref/login.php");
}

