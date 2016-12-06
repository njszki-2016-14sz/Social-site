<?php
	include("../model/DB.php");
	include("../model/User.php");
	session_start();
	
	$DB = new DB("SocialSiteDB");// Példányosítás
	
	//Belépés
	if(isset($_POST['Logingin'])) 
	{
		$pwd = md5($_POST['Pw']);
		$email = $_POST['E_mail'];
		$sql = "SELECT * FROM users WHERE UserEmail ='$email' AND UserPassword = '$pwd';";
		$res = $DB->query($sql);		
		
		if($res == false)
		{
			$_SESSION['error'] = "Wrong password or email!";
			header("location: ../view/index.php");
		} 
		else 
		{
			// $res <-- egy Array ( Array[0] -> a sor amit visszaad DB-ből)
			$_SESSION['User'] = new User($res[0][UserFirstName], $res[0][UserLastName], $res[0][UserTag], $res[0][UserDate], $res[0][UserBIO], $res[0][UserImgLocation]);
			header("location: ../view/newsfeed.php");
		}
	}
	
	//Regisztráció
	if(isset($_POST['Register'])) 
	{
		$email = $_POST['E_mail'];
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$UserTag = $_POST['UserTag'];
		$pwd = md5($_POST['Pw']); 
		$pwdConf = md5($_POST['Pw_conf']);
		
		if($pwd == $pwdConf)
		{
			$sql = "INSERT INTO users 
					(UserTag, UserPassword, UserEmail, UserDate, UserFirstName, UserBIO, UserLastName, UserImgLocation)
					VALUES ('$UserTag', '$pwd', '$email', '1990-01-01', '$FirstName', 'DefBIO', '$LastName', 'proba.jpg')";
			$res = $DB->query($sql);
			
			if($res == false)
			{
				if(strpos(mysql_error,"Duplicate entry") !== false)
				{
					if(strpos(mysql_error,"UserEmail") !== false)
					{
						$_SESSION['error'] = "Már van ilyen E-mail Cím köszi.";
					}
					else
					{
						$_SESSION['error'] = "Már van ilyen User név köszi.";
					}
				}
				header("location: ../view/register.php");
			}
		}
		header("location: ../view/index.php");
	}
	
	//Regisztrációs felületre továbbítani
	if(isset($_POST['ToRegister'])) 
	{
		header("location: ../view/register.php");
	}
?>
