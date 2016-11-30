<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blood Web</title>
		<link rel="stylesheet" type="text/css" href="../style/index.css">
		<link rel="shortcut icon" type="image/png" href="../img/favicon32.png"/>
	</head>
	<body>
	<form action="../controll/SignInControll.php" method="POST">
		<div class="center">
			<div class = "logo"><img src="../img/logo_shaded.png" style="width:500px;height:134px;"></div>
			<div class="spacing"><input type="text" placeholder= "E-mail" name="E_mail"></div>
			<div class="spacing"><input type="password" placeholder="Password" name="Pw"></div>
			<div class="spacing"><input type="submit" name="Logingin" value="Login"></div>
			<?php
			session_start();
			if(isset($_SESSION["error"]))
			{
				$error=$_SESSION["error"];
				?>
			<span id='hint'><?php print $error;?></span><br>
			<?php
			$_SESSION["error"]=null;
			}
			?>
			<span id="hint">Don't have an account yet?</span>
			<div class="spacing"><input type="submit" name="ToRegister" value="Register"></a></div>
		</div>
	</form>
	</body>
	
	<!-- Szóval: Kell még PHP-ba átalakítani, ide elküldeni Session-el a hibát, Hiíratni Ifen belül a hibát, végül kinullázni a Session hibaüzenetet -->
</html>
