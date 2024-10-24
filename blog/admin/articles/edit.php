<?php
$id = $_GET['id'];
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
<form action="actions/update.php" method="post">
    <p>модерация прошла</p>
    <input type="radio" name="moder" value="1">
    <p>модерация не прошла</p>
    <input type="radio" name="moder" value="0"><br>
    <input type="hidden" value="<?=$id?>" name="id">
    <input type="submit" value="применить">
</form>
</body>
</html>