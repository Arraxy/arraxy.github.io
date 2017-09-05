<?php
	// Информация о подключении
	$server = "localhost";
	$db_name   = "database";
	$name	   = "root";
	$password  = "";
	
	// Подключение к серверу MySQL
	$db = mysql_connect($server, $name, $password);

	// Выбрать БД
	mysql_select_db("db_arstore") or die(mysql_error());
?>