<?php 
function title()
{
	//Получение имени страницы из адреснойц строки 
	$url = $_SERVER['REQUEST_URI'];
	preg_match('/\/([\w\.]+)\./u', $url, $title);
	if (!empty($title[1])) {
	  $title = $title[1];
	} else {
	  $title = null;
	}
	//Подключаемся к бд 
	$query = mysql_query(" SELECT * FROM `title` WHERE `title` = '$title' ");
	$row = mysql_fetch_array($query);

	//Проверяем есть ли название этои страницы и если да то выводим его 
	if ($row[0] == '') {
		echo "Магазин";
	}
	else {
		echo $row['name'];
	}
};
function unlog()
{
	$_SESSION['enter'] = 0;
	header('Location: http://localhost/shop/html/account.php');
}
function counter()
{
	
}
 ?>