<?php 
$user = "root";
$password = "root";
$host = "localhost";
$db = "testing";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo = new PDO ($dbh, $user, $password);

    $delivery=$_POST["delivery"];
    $country=$_POST["country"];
    $busket=$_POST["busket"];
    $input=$_POST["input"];
    $row="UPDATE header SET delivery=:delivery, country=:country, busket=:busket, input=:input";
    $query=$pdo->prepare($row);
    $query->execute(["delivery" => $delivery, "country" => $country, "busket" => $busket, "input" => $input]);
    echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/header.php">';
?>