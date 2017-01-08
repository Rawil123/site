<?php 
include 'connect.php';


$login = $_POST['login'];
$password = md5($_POST['password']);
$repitPassword = md5($_POST['repitPassword']);
$email = $_POST['email'];
$error = false;

if ($password != $repitPassword) {
	$error =true;                         
}

$loginDb = mysql_query('SELECT * FROM user WHERE login = "$login" ');
$loginDb = mysql_fetch_array($loginDb);

if ($loginDb['login'] == $login) {
	$error = true ;
}



if ($error == false) {
	$query = mysql_query("INSERT INTO `user` (`login`, `password`, `email`) VALUES ('$login', '$password', '$email');");
}
else {
	echo "error";
}
	


 ?>