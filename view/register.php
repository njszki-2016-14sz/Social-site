<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Blood Web</title>
		<link rel="stylesheet" type="text/css" href="../style/index.css">
		<link rel="shortcut icon" type="image/png" href="../img/favicon32.png"/>
		<script src="../controll/jquery-3.1.1.js"></script>
		<script src="../controll/pwStrength.js"></script>
	</head>
	<body>
	<form action="../controll/SignInControll.php" method="POST">
		<div class="center">
			<div class = "logo">
				<img src="../img/logo_shaded.png" style="width:500px;height:134px;">
			</div>
			<div class="row spacing"> 
				<div class="item1">E-mail:</div>
				<div><input type="text" name="E_mail"></div>
			</div>
			<div class="row spacing">
				<div class="item1">First Name:</div>
				<div><input type="text" name="FirstName"></div>
			</div>
			<div class="row spacing">
				<div class="item1">Last Name:</div>
				<div><input type="text" name="LastName"></div>
			</div>
			<div class="row spacing">
				<div class="item1">User Tag:</div>
				<div><input type="text" name="UserName"></div>
			</div>
			<div class="row spacing">
				<div class="item1">Password:</div>
				<div><input id="Pw" onkeyup="anim()" type="password" name="Pw"></div>
			</div>
			<div class="row">
				<div class="pw_strength">
				<ul>
					<li><div class="easy"></div></li>
					<li><div class="medium"></div></li>
					<li><div class="hard"></div></li>
				</ul>
				</div>
			</div>
			<div class="row spacing">
				<div class="item1">Confirm Password:</div>
				<div> <input type="password" name="Pw_conf"> </div>
			</div>
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
			<div class="row spacing"> 
				<input type="submit" name="Register" value="Register">
			</div>
			
		</div>
	</form>
	</body>
</html>