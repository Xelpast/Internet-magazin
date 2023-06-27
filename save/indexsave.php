<!-- <?php require 'public/header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">  
    <title>Интернет-магазин</title>
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
    <?php require 'public/categories.php' ?>
    <?php require 'public/osnova.php' ?>
    <?php require 'public/footer.php' ?>
    
    
<script src="main.js"></script>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/style.css">  
    <title>Интернет-магазин</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="header">
        <a href="#"><img src="image/logo.png" alt="СМОТРИ ВНИМАТЕЛЬНЕЙ" class="logo"></a>

        <div class="block1">
            <div class="kat1">
                <h4><a href="#">Доставка</a></h4>
            </div>
            <div class="kat2">
                <h4><a href="#">Страна</a></h4>
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
                <a href=""><img src="image/korzinaa.png" alt="">Корзина</a>
            </div>
            <form action="login.php" method="post">
            <div class="inputs">
                <a href="#" id="open_pop_up"><img src="image/profill.png" alt="">Вход</a>
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
        <div class="container">
        <div class="container2"><a href="#"></a></div>
        <div class="container3"><a href="#"></a></div>
        <div class="container4"><a href="#"></a></div>
        <div class="container5"><a href="#"></a></div>
    </div>
        <div class="slaider-sv">
            <div class="navigation">
                <label for="r1" class="bar"></label>
                <label for="r2" class="bar"></label>
                <label for="r3" class="bar"></label>
                <label for="r4" class="bar"></label>
            </div>
            <div class="sidebar middle">
                <div class="slaider">
                    <input type="radio" name="r" id="r1" checked>
                    <input type="radio" name="r" id="r2">
                    <input type="radio" name="r" id="r3">
                    <input type="radio" name="r" id="r4">

                    <div class="slide s1"><img src="image/1.jpg" alt=""></div>
                    <div class="slide"><img src="image/2.jpg" alt=""></div>
                    <div class="slide"><img src="image/3.jpg" alt=""></div>
                    <div class="slide"><img src="image/4.jpg" alt=""></div>
                </div>
            </div>
        </div>
    <div class="osnova">
            <!-- ПЕРВАЯ 4-ка картинок --> 
            <div class="kategoryi">
                <div class="kategoryi-z">
                <b>Категории <p>топиарий:</p></b>
                </div>
                <div class="spisok">
                    <ul>
                        <a href=""><li>Фруктовые</li></a>
                        <a href=""><li>Денежные</li></a>
                        <a href=""><li>Сезонные</li></a>
                        <a href=""><li>Цветочные</li></a>
                        <a href=""><li>Популярные</li></a>
                        <a href=""><li>Хиты</li>
                    </ul>
                </div>
            </div>    
        <div class="rabota">           
            <div class="rabota1">
                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>

                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>

                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>
            
                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>
            </div>
         <!-- ВТОРАЯ 4-ка картинок -->
            <div class="rabota1">
                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>

                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>

                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>
            
                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>
            </div>
        
         <!-- Третья 4-ка картинок -->
            <div class="rabota1">
                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>

                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>

                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>
            
                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>
            </div>
        
         <!-- Четвёртая 4-ка картинок -->
            <div class="rabota1">
                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>

                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>

                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>
            
                <div class="topiar1"><a href="#"><img src="image/visna.jpg" alt="!"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#">999₽</a>
                        </div>
                            <div class="zenaz">
                                <a href="">1024₽</a>
                            </div>
                    </div>
                    <h3>Топиарий: <p>Вишнёвый сад</p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>
            </div>    
        </div>
    </div>
    </div>
    
    <div class="footer">
        <div class="obsh">
            Организация по защите деревьев Topi Topi
            Посаженно деревьев: <b>15 348</b><p>
            <a href="#"><img src="image/logot.jpg" alt="СМОТРИ ВНИМАТЕЛЬНЕЙ" class="logo"></a>
            <a href="inputadm.php">&#169;</a> Друзья берегите деревья!</p>
        </div>
        <div class="dop">
            Наши контакты
            <ul>
                <a href="https://vk.com" class="z1"><li style="--clr:#1da1f2"><i class="fa fa-vk" aria-hidden="true"></i></li></a>
                <a href="https://web.whatsapp.com/" class="z2"><li style="--clr:#25d366"><i class="fa fa-whatsapp" aria-hidden="true"></i></li></a>
                <a href="https://web.telegram.org/" class="z3"><li style="--clr:#1da1f2"><i class="fa fa-telegram" aria-hidden="true"></i></li></a>
                <a href="https://www.youtube.com/" class="z4"><li style="--clr:#ff0000"><i class="fa fa-youtube-play" aria-hidden="true"></i></li></a>
            </ul>
        </div>
        <div class="infos">
            Связаться с нами Topi Topi:
            <p class="otr">Телефон: 8-929-768-69-08</p>
            <p>Дополнительный: 2-64-48</p><br>
            <div class="podder">
                <p>Поддержка: 2-64-66</p>
            </div>
        </div>
    </div>
<script src="main.js"></script>
</body>
</html>