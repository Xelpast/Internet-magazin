<?php require_once '../functions/connect.php'; ?>
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
    <h1>Редактирование контактной информации</h1>
   <?php echo "Добрый день, " .$_SESSION['login']; ?><br>
    <a href="/logouts.php">Выйти</a><br>
    
    <?php 
    $sql = $pdo->prepare("SELECT * FROM header");
    $sql->execute();
    $res = $sql->fetch(PDO::FETCH_OBJ);
    ?>

    <form action="/admin/header/header.php" method="post">
        <input type="text" name="delivery" value="<?php echo $res->delivery ?>">
        <input type="text" name="country" value="<?php echo $res->country?>">
        <input type="text" name="busket" value="<?php echo $res->busket?>">
        <input type="text" name="input" value="<?php echo $res->input?>">
        <input type="submit" value="Сохранение...">
    </form>
</div>
</body>
</html>

