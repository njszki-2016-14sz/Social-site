<!DOCTYPE html>
<?php
	session_start();
	if(isset($_GET['logout']))
	{
		session_destroy();
	}
?>
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
				<div><img class ="logo" src="../img/logo_shaded.png"></div>
				<div class="spacing"><input class="round" type="text" placeholder= "E-mail" name="E_mail"></div>
				<div class="spacing"><input class="round" type="password" placeholder="Password" name="Pw"></div>
				<div class="spacing"><input class="round" type="submit" name="Logingin" value="Login"></div>
				<?php
					
					if(isset($_SESSION["error"]))
					{
						$error=$_SESSION["error"];
				?>
						<div class="error_box hint"><?php print $error;?></div>
				<?php
						$_SESSION["error"]=null;
					}
				?>
				<div class="spacing helpbox">
					<span class="hint">Don't have an account yet?</span>
					<input class="round" type="submit" name="ToRegister" value="Register"></a>
				</div>
			</div>
		</form>
	</body>
</html>
