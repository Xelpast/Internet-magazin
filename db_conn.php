<?php

$sname= "localhost";
$unmae= "root";
$password = "root";

$db_name = "iusers";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Соединение прервано!";
}
