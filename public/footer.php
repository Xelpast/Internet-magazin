<?php require_once './functions/connect.php'; ?>
<?php 
$mains = $pdo->prepare("SELECT * FROM footer");
$mains->execute();
$resul = $mains->fetch(PDO::FETCH_ASSOC); 
?>

<div class="footer">
        <div class="obsh">
            <b><?php echo $resul["text"]?></b><p>
            <a href="#"><img src="image/logot.jpg" alt="СМОТРИ ВНИМАТЕЛЬНЕЙ" class="logo"></a>
            <a href="inputadm.php">&#169;</a> Друзья берегите растения!</p>
        </div>
        <div class="dop">
            <?php echo $resul["text-s"]?>
            <ul>
                <a href="https://vk.com" class="z1"><li style="--clr:#1da1f2"><i class="fa fa-vk" aria-hidden="true"></i></li></a>
                <a href="https://web.whatsapp.com/" class="z2"><li style="--clr:#25d366"><i class="fa fa-whatsapp" aria-hidden="true"></i></li></a>
                <a href="https://web.telegram.org/" class="z3"><li style="--clr:#1da1f2"><i class="fa fa-telegram" aria-hidden="true"></i></li></a>
                <a href="https://www.youtube.com/" class="z4"><li style="--clr:#ff0000"><i class="fa fa-youtube-play" aria-hidden="true"></i></li></a>
            </ul>
        </div>
        <div class="infos">
            <?php echo $resul["text-z"]?>
            <p class="otr"><?php echo $resul["phone"]?></p>
            <p></p><br>
            <div class="podder">
                <p><a href="./karta.php"><?php echo $resul["help"]?></a></p>
            </div>
        </div>
    </div>