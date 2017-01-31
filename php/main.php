<?php 
include 'connect.php';
include '../php/include.php';

$login = $_POST['login'];
$password = md5($_POST['password']);
$repitPassword = md5($_POST['repitPassword']);
$email = $_POST['email'];

$error = 0;
/*if register*/

$lenLogin = strlen($login);
$lenEmail = strlen($email);
$lenPassword = strlen($password);



if ($lenLogin <= 3 or $lenLogin >= 32) {
	$error = 1;
	echo "~Длинна логина слишком маленькая(3) или большая(32) ~loginError~1";
}
if ($lenEmail <= 3 or $lenEmail >= 32) {
	$error = 1;
	echo "~Длинна email слишком маленькая(3) или большая(32) ~emailError~2";
}
if ($lenPassword <= 3 or $lenPassword >= 32) {
	$error = 1;
	echo "~Длинна пароля слишком маленькая(3) или большая(32) ~passwordError~3";
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
	echo "~Недопустимый символ ~loginError~4";
}
if ($checkEmail == 0) {
	$error = 1;
	echo "~Недопустимый символ ~emailError~5";
}
if ($checkEmailLittle == 0) {
	$error = 1;
	echo "~Отсутствует @ ~emailError~6";
}
if ($password != $repitPassword) {
	$error = 1;
	echo "~Пароли не совпадают~repitPasswordError~7";
}


	$queryLogin =mysql_query("SELECT * FROM user WHERE login = '$login'");
	$loginRow = mysql_fetch_array($queryLogin);


if ($loginRow['login'] == $login ) {
	$error = 1;
	echo "~Логин занят ~loginError~7";
}

	$queryEmail = mysql_query(" SELECT * FROM user WHERE email = '$email' ");
	$emailRow = mysql_fetch_array($queryEmail);


if ($emailRow['email'] == $email) {
	$error = 1;
	echo "~Email занят ~emailError~8";
}



/*Register Query*/

if ($error == 0) {
	mysql_query("INSERT INTO `shop`.`user` (`login`, `password`, `email`) VALUES ( '$login', '$password', '$email');");
	echo "Вы успешно зарегистривовались~goodReg";
}

	

mysql_close($link);
 ?>