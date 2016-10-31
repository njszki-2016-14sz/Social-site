<?php
	include("../model/DB.php");
	$DB = new DB("SocialSiteDB");// Példányosítás
	$db = $DB->connection; // Connection elnevezése $db ként
	
	//Belépés
	if(isset($_POST['Login'])) {
		if(isset($_POST['E_mail'])) {
			$email=$_POST['E_mail'];
			if(isset($_POST['Pw'])) {
				$pwd = md5($_POST['Pw']);
				$sql = "SELECT * FROM Users WHERE '$email' = UserEmail AND '$pwd' = UserPassword;";
				print_r ($DB->query($sql));
				
				//továbbítani a tömböt és az oldalt a User.php oldalra
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
