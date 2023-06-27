<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);

	$user_data = 'uname='. $uname;


	if (empty($uname)) {
		header("Location: index.php?error=Требуется логин&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Необходим пароль&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: index.php?error=Требуется повторный пароль&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: index.php?error=Пароли не совпадают&$user_data");
	    exit();
	}

	else{

		// // hashing the password
        // $pass = md5($pass);

	    $sql = "SELECT * FROM infousers WHERE login='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: index.php?error=Логин уже используется, попробуйте другое&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO infousers(login, password) VALUES('$uname', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: index.php?success=Учётная запись успешна создана");
	         exit();
           }else {
	           	header("Location: index.php?error=Неизвестная ошибка&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}