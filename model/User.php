<?php
class User
{
	function __construct() {
		$this->email = null;
		$this->name = "";
		$this->password = "";
	}
	
	function LogIn($name, $password) {
		$db = mysql_connect('localhost', 'root', '');
		if($db) {
			die('Could not connnect: ' .mysql_error());
		}
		
		$db_selected = mysql_select_db('users', $db);
		if(!$db_selected) {
			die('Can\'t use: ' .mysql_error());
		}
		
		mysql_query("SET NAME utf8", $db);
		$res = mysql_query("SELECT * FROM user;", $db);
		
		$record = mysql_fetch_assoc($res);
		
		if($record["name"] == $name && $record["password"]==md5($password)) {
			$this->name = $name;
			$this->password = $password;
			return true;
		}
		
		function isLoggedIn() {
			if($this->name == "MyName") {
				return true;
			} else {
				return false;
			}
		}
	}
}
?>
