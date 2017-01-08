<?php 
$link = mysql_connect('localhost','root','');
if ( !$link ) die ("error1");
$db = mysql_select_db('shop') or die("error2");
 ?>