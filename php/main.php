<?php 
session_start();
include 'connect.php';
include '../php/include.php';

/*register*/
if (isset($_POST['reg'])) {
	$login = $_POST['login'];
	$passwordUser = $_POST['password'];
	$repitPasswordUser = $_POST['repitPassword'];
	$passwordDb = md5($passwordUser);
	$email = $_POST['email'];

	$error = 0;
	/*if register*/

	$lenLogin = strlen($login);
	$lenEmail = strlen($email);
	$lenPassword = strlen($passwordUser);



	if ($lenLogin < 3 or $lenLogin > 32) {
		$error = 1;
		exit("Длинна логина слишком маленькая(3) или большая(32)");
	}

	if ($lenPassword < 3 or $lenPassword > 32) {
		$error = 1;
		exit("Длинна пароля слишком маленькая(3) или большая(32)");
	}
	$specialCharacters = "/^[a-zA-Z0-9]+$/";
	$specialCharactersEmail = "/^[a-zA-Z0-9@.]+$/" ;
	$specialCharactersEmailLittle = '/@./';


	$checkLogin = preg_match($specialCharacters,$login,$match );
	$checkEmail = preg_match($specialCharactersEmail,$email,$match );
	$checkEmailLittle = preg_match(
		$specialCharactersEmailLittle,$email,$match );



	if ($checkLogin == 0) {
		$error = 1;
		exit("Недопустимый символ");
	}
	if ($checkEmail == 0) {
		$error = 1;
		exit("Недопустимый символ");
	}
	if ($checkEmailLittle == 0) {
		$error = 1;
		exit("Отсутствует @");
	}
	if ($password != $repitPassword) {
		$error = 1;
		exit("Пароли не совпадают");
	}


		$queryLogin =mysql_query("SELECT * FROM user WHERE login = '$login'");
		$loginRow = mysql_fetch_array($queryLogin);


	if ($loginRow['login'] == $login ) {
		$error = 1;
		exit("Логин занят");
	}

		$queryEmail = mysql_query(" SELECT * FROM user WHERE email = '$email' ");
		$emailRow = mysql_fetch_array($queryEmail);


	if ($emailRow['email'] == $email) {
		$error = 1;
		exit("Email занят");
	}



	/*Register Query*/

	if ($error == 0) {
		mysql_query("INSERT INTO `shop`.`user` (`login`, `password`, `email`) VALUES ( '$login', '$passwordDb', '$email');");
		echo "Вы успешно зарегистривовались";
	}
	}





/*login*/

if (isset($_POST['enter'])) {

	$enter = 0;
	$login = $_POST['loginEnter'];
	$password = md5($_POST['passwordEnter']);
 	$setCookieEnter = $_POST['setCookieEnter'];	
 	$user = array($login,$password);
	$query = mysql_query( " SELECT * FROM user WHERE login = '$login' " );
	$row = mysql_fetch_array( $query );

	if ($password == $row['password']) {
		$enter = 1;
		echo "Вы успешно вошли";
	}
	else {
		echo "Неправильный логин или пароль";
	};
	$_SESSION['enter'] = $enter;
	$_SESSION['login'] = $login;
}


if (isset($_POST['createOpinion'])) {
	$error = 0;
	$success = 0;

	//Получаем данные из формы
	$idProduct = $_POST['idProduct'];
	$login = $_SESSION['login'];
	$titleOpinion = $_POST['titleOpinion'];
	$textOpinion = $_POST['textOpinion'];
	// Проверяем их на корректность 

	if (strlen($titleOpinion) >= 64) {
		$error = 1;
	 	exit ("Длинное краткое название(64)");
	}

	if (strlen($textOpinion) >= 2014) {
		$error = 1;
	 	exit ("Длинная оценка(2014) ");
	}
	if (strlen($titleOpinion) < 3) {
		$error = 1;
		exit('Слишком короткое название(3) ');
	}
	if (strlen($textOpinion) < 64) {
		$error = 1;
		exit('Слишком короткая оценка(64) ');
	}
    // Состовляем запрос 
	if ($error == 0 and $_SESSION['success'] == 0) {
		$query = mysql_query(" INSERT INTO `shop`.`opinion` (`id`, `idProduct`, `username`, `titleOpinion`, `textOpinion`) VALUES (NULL, '$idProduct', '$login', '$titleOpinion', '$textOpinion'); ");
		echo "Коментарий оставлен";

		$success = 1;
		$_SESSION['success'] = $success;
	}
	if ($_SESSION['success'] == 1) {
		echo 'Коментарий оставлен' ;
	}
}

mysql_close($link);
 ?>