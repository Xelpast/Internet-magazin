<?php

session_start();

if (isset($_GET['id'])) {
  array_push($_SESSION['login'], $_GET['id']);
}

header("Location: /home.php");