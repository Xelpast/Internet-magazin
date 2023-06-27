<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/input.css">  
    <title>Вход в админку</title>
</head>
<body>
    <div class="inp">
        Вход в панель администратора
    </div>
    <div class="logotip">
        <a href="index.php"><img src="image/logot.jpg" alt="СМОТРИ ВНИМАТЕЛЬНЕЙ" class="logo"></a>
    </div>
    <form action="admin/admin.php" method="post">
        <div class="form-group">
            <input type="text" placeholder="Логин" name="login">
        </div>
        <div class="form-group">
            <input type="text" placeholder="Пароль" name="password">
        </div>
        <div class="bttn">
            <button type="sumbit" class="btn btn-primary">Войти</button>
        </div>
    </form>
</body>
</html>