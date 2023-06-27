<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/adminka.css">  
    <title>Панель администратора</title>
</head>
<body>
<div class="adminka">
    <?php echo "Вы вошли под аккаунтом, " .$_SESSION['login']; ?>
    <a href="/logouts.php" class="vod">Выйти</a><br>
    <a href="/admin/header.php">header</a><br>
    <a href="/admin/osnova.php">osnova</a><br>
</div>
</body>
</html>

