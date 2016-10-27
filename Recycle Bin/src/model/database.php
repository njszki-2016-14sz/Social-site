<?php
	function dataBaseConnection()
	{
		// 1. csatlakozás
		$db = mysql_connect('localhost', 'root', '');
		if(!$db) 
		{
			die('Could not connnect: ' .mysql_error());
		}
		print("Succesfull Connection!");
		
		// 2. kiválasztás
		$db_selected = mysql_select_db('users', $db);
		if(!$db_selected) {
			die('Can\'t use: ' .mysql_error());
		}
		mysql_query("SET NAME utf8", $db);
		
		return $db;
	}
?>