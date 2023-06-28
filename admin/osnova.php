<?php require_once '../functions/connect.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/adminkas.css">  
    <title>Админка основы</title>
</head>
<body>
<div class="adminka">
    <h1>Редактирование основной информации</h1>
    <?php echo "Добрый день, " .$_SESSION['login']; ?><br>
    <a href="/logouts.php">Выйти</a><br>
  
    <?php 
    $sql2=$pdo->prepare("SELECT * FROM osnova");
    $sql2->execute();
    while($osnovas=$sql2->fetch(PDO::FETCH_OBJ)):?>

    
    <form class="ui-form" action="/admin/osnova/osnova.php/<?php echo $osnovas->id ?>" method="post" enctype="multipart/form-data">
        <?php echo $osnovas->id?>
        Основная цена<input type="text" name="price" value="<?php echo $osnovas->price?>"><br>
        Предыдущая цена<input type="text" name="pricez" value="<?php echo $osnovas->pricez?>"><br>
        Название цветов<input type="text" name="namer" value="<?php echo $osnovas->namer?>"><br>
        <p>
            <input type="file" name="im">
        </p>
        <img src="/admin/img/<?php echo $osnovas->filenames?>" width="200px">
        <input type="submit" name="save" value="Сохранение...">
    </form>

    <?php endwhile?>
</div>
</body>
</html>