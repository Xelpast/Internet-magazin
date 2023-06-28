<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['login'])) {

?>

<?php require_once './functions/connect.php'; ?>
<?php 
$sql2 = $pdo->prepare("SELECT * FROM osnova");
$sql2->execute();
$osnova = $sql2->fetchAll(PDO::FETCH_OBJ); 
?>

<?php require_once './functions/connect.php'; ?>
<?php 
$sql = $pdo->prepare("SELECT * FROM header");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_ASSOC); 
?>

<?php require_once './functions/connect.php'; ?>
<div class="header">
        <a href="#"><img src="image/logo.png" alt="СМОТРИ ВНИМАТЕЛЬНЕЙ" class="logo"></a>

        <div class="block1">
            <div class="kat1">
                <h4><a href="#"><?php echo $res["delivery"]?></a></h4>
            </div>
            <div class="kat2">
                <h4><a href="#"><?php echo $res["country"]?></a></h4>
            </div>
        </div>

        <div class="search1">
            <input class="search2" type="text" name="" placeholder="Поиск...">
            <a class="search3" href="#">
                <img src="image/search.png">
            </a>
        </div>

        <div class="three">
            <div class="busket">
                <a href="busket.php"><img src="image/korzinaa.png" alt=""><?php echo $res["busket"]?></a>
            </div>
            <form action="login.php" method="post">
            <div class="inputs">
                <a href="#" id="open_pop_up"><img src="image/profill.png" alt=""><br><?php echo $_SESSION['login'];?></a>
                <div class="pop_up" id="pop_up">
                    <div class="pop_up_container">
                        <div class="pop_up_body" id="pop_up_body">
                            <img src="image/logo.png" alt="СМОТРИ ВНИМАТЕЛЬНЕЙ" class="logo">
                            <p>Авторизация</p>
                            <form action="">
                                <input type="text" placeholder="Логин" name="uname">
                                <input type="password" placeholder="Пароль" name="password">
                                <button>Вход</button>
                                <hr class="zez">
                                <a href="#" id="doOpenPopUp"><button>Регистрация</button></a>
                                <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?> 
                            </form>
                            <div class="pop_up_close" id="pop_up_close">
                                &#10006
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <form action="signup-check.php" method="post">
                <div class="pop_up" id="doPop_up">
                    <div class="pop_up_container">
                        <div class="pop_up_body" id="doPop_up_body">
                            <img src="image/logo.png" alt="СМОТРИ ВНИМАТЕЛЬНЕЙ" class="logo">
                            <p>Регистрация</p>
                            <form action="">
                                <input type="text" placeholder="Логин" name="uname">
                                <input type="password" placeholder="Пароль" name="password">
                                <input type="password" placeholder="Повторите пароль" name="re_password">
                                <hr class="zed">
                                <button class="re">Отправить</button>
                                <?php if (isset($_GET['error_signup'])) { ?>
                                <p class="error_signup"><?php echo $_GET['error_signup']; ?></p>
                            <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>
                            </form>
                            <div class="pop_up_close" id="doPop_up_close">
                                &#10006
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class="block2">
        </div>
    </div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">  
    <title>home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<?php require 'public/slider.php' ?>
    </div>
        <div class="container">
        <div class="container2"><a href="#"></a></div>
        <div class="container3"><a href="#"></a></div>
        <div class="container4"><a href="#"></a></div>
        <div class="container5"><a href="#"></a></div>
    </div>
    <?php require 'public/osnova.php' ?>
    <?php require 'public/footer.php' ?>
    
    
<script src="main.js"></script>

</body>
</html>


<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

 