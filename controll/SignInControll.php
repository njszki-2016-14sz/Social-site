<?php
	include("../model/DB.php");
	include("../model/User.php");
	
	$DB = new DB("SocialSiteDB");// Példányosítás
	$db = $DB->connection; // Connection elnevezése $db ként
	
	//Belépés
	if(isset($_POST['Login'])) {
		if(isset($_POST['E_mail'])) {
			$email=$_POST['E_mail'];
			if(isset($_POST['Pw'])) {
				$pwd = md5($_POST['Pw']);
				$sql = "SELECT * FROM Users WHERE '$email' = UserEmail AND '$pwd' = UserPassword;";
				
				//továbbítani a tömböt és az oldalt a User.php oldalra
				// Adatok beillesztése a User.php oldalra
				$User = new User(null, null, null, null, null, null);
				

				header('Location: ../view/newsfeed.html');
			} else {
				print "Nincs jelszó";
				//Visszaadni hogy rossz a jelszó
			}
		} else {
			print "Nincs email";
			//Visszaadni hogy rossz az email
		}
	}
	//Regisztráció
	if(isset($_POST['Register'])) {
		
	}
?>
