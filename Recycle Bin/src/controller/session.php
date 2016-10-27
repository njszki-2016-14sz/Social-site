<?php
	session_start();
	include('/../model/database.php');
	
	$db = $db = dataBaseConnection();
	
	$user_check = $_SESSION['login_user'];
	$ses_sql = mysql_query("SELECT name FROM user Where name = '$user_check'", $db);
	$row = mysql_fetch_array($ses_sql);
	$login_session = $row['name'];
	
	if(!isset($_SESSION['login_user']))
	{
		header("Location: ../view/login.php");
	}
?>