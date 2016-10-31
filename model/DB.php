<?php
class DB {
	var $connection;
	
	//Csatlakoztatás
	function __construct($dbName) {
		$connection = mysql_connect('localhost', 'root', '');
		if(!$connection) {
			die('Connect error: '.mysql_error());
		}
		
		//Adatbázis kiválasztása
		$database = mysql_select_db($dbName, $connection);
		if(!$database) {
			die('Select db error: '.mysql_error());
		}
		
		//Kódolás beállítás
		$names = mysql_query("SET NAMES utf8;", $connection);
		if(!$names) {
			die('Utf-8 setting error: '.mysql_error());
		}
		$this->connection = $connection;
    }
	
	//SQL függvény végrehajtása
	function query($queryString) {
		$resultId = mysql_query($queryString, $this->connection);
		if(!$resultId){
			die('Query error: '.mysql_error());
		}
		
		//Kell e lekérdezni az adatbázisból
		if(strpos($queryString,"SELECT") !== false) {
			$rows = Array();
			while($record = mysql_fetch_assoc($resultId)) {
				$rows[] = $record;
			}
			return $rows;
		}
	}
	
	//Adatbázis bezárása
	function close() {
		$close = mysql_close($this->connection);
		if(!$close){
			die('Close error: '.mysql_error());
		}
	}
	
	//Rosszcsont karakterel levédése
	function escape($str) {
		return mysql_real_escape_string($str, $this->connection);
	}
}
?>
