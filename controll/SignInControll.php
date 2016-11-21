<?php
	include("../model/DB.php");
	include("../model/User.php");
	session_start();
	
	$DB = new DB("SocialSiteDB");// Példányosítás
	
	//Belépés
		if($_POST['Login']){
			$pwd = md5($_POST['Pw']);
			$email=$_POST['E_mail'];
			$sql = "SELECT * FROM users WHERE UserEmail ='$email' AND UserPassword = '$pwd';";
			$res = $DB->query($sql);
			if($res == false){
				$_SESSION['error']="wrong password or username";
				header("location: ../view/index.php");
			}
			
			//továbbítani a tömböt és az oldalt a User.php oldalra
			// Adatok beillesztése a User.php oldalra
			$User = new User(null, null, null, null, null, null);
		
		}

	//Regisztráció
		if(isset($_POST['Register'])) {
			
		}
?>
