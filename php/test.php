<!DOCTYPE html>
<html lang="en">
<head>
	<?php include '../elem/head.php'; ?>
</head>
<body>
	<?php

	include 'connect.php';

	$loginDb = mysql_query("SELECT * FROM user WHERE login = 'raw' ");
	$loginDb = mysql_fetch_array($loginDb);
	echo $loginDb[1];

	?>
</body>
</html>