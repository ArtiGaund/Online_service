<?php
	$dbHost='localhost';
	$username='root';
	$password='';
	$db='online_service';
	mysql_connect("$dbHost","$username","$password");
	$con=mysql_select_db("$db");
?>