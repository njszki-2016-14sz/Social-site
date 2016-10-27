<?php
	session_start();
	
	include('/../model/database.php');

	$db = dataBaseConnection();
	
	//function userLogin()
	//{
		// username and password sent from form 
		$myusername = mysql_real_escape_string($_POST['username'], $db);
		$mypassword = mysql_real_escape_string($_POST['password'], $db); 
		  
		$sql = "SELECT name FROM user WHERE name = '$myusername'";
		$result = mysql_query($sql, $db);
		$row = mysql_fetch_array($result);
		$active = $row['active'];
		  
		$count = mysql_num_rows($result);
		  
		// If result matched $myusername and $mypassword, table row must be 1 row	
		if($count == 1) 
		{
			$_SESSION['login_user'] = $myusername;
			
			header("Location: ../view/welcome.php");
		}
		else 
		{
			$error = "Your Login Name or Password is invalid";
			print($error);
		}
	//}
?>