<?php require_once './functions/connect.php'; ?>
<?php 
$sql = $pdo->prepare("SELECT * FROM header");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_ASSOC); 
?>

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
                <a href=""><img src="image/korzinaa.png" alt=""><?php echo $res["busket"]?></a>
            </div>
            <form action="login.php" method="post">
            <div class="inputs">
                <a href="#" id="open_pop_up"><img src="image/profill.png" alt=""><?php echo $res["input"]?></a>
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