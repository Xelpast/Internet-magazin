<?php require_once './functions/connect.php'; ?>
<?php 
$sql2 = $pdo->prepare("SELECT * FROM osnova");
$sql2->execute();
$osnova = $sql2->fetchAll(PDO::FETCH_OBJ); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/styles.css">
    <title>Document</title>
</head>
<body>
<div class="osnova">
            <div class="kategoryi">
                <div class="kategoryi-z">
                <b>Категории <p>цветов:</p></b>
                </div>
                <div class="spisok">
                    <ul>
                        <a href=""><li>Розы</li></a>
                        <a href=""><li>Наборы</li></a>
                        <a href=""><li>Сезонные</li></a>
                        <a href=""><li>Свадебные</li></a>
                        <a href=""><li>Популярные</li></a>
                        <a href=""><li>Хиты</li>
                    </ul>
                </div>
            </div>  
            <!-- ПЕРВАЯ 4-ка картинок -->   
        <div class="rabota">           
            <div class="rabota1"> 
            <?php foreach($osnova as $osnovas):?>
                <div class="topiar1"><a href="#"><img src="admin/img/<?php echo $osnovas->filenames?>"></a>
                    <div class="zena">
                        <div class="zenao">
                            <a href="#"><?php echo $osnovas->price?></a> 
                        </div>
                            <div class="zenaz">
                                <a href=""><?php echo $osnovas->pricez?></a>
                            </div>
                    </div>
                    <h3><p><?php echo $osnovas->namer?></p></h3>
                    <div class="v-korziny">
                        <a href="#"><h3>В корзину</h3></a>
                    </div>
                </div>
                <?php endforeach ?>
            </div>  
        </div>
    </div>
</div>
</body>
</html>



                