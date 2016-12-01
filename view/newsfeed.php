<!DOCTYPE html>
<?php
	include("../model/User.php");
	session_start();
	
	$user = $_SESSION['User'];
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>News Feed</title>
		<link rel="stylesheet" type="text/css" href="../style/newsfeed.css">
		<link rel="shortcut icon" type="image/png" href="../img/favicon32.png"/>
		
		<script src="../controll/feedControll.js"></script>
	</head>
	
	<body>
		<div class='wrapper'>
			<div id="header">
				<ul>
					<li class="dropdown">
						<a href="javascript:void(0)" class="dropbtn" onclick="optionsDropdwn()">Options</a>
						<div class="dropdown-content" id="myDropdown">
							<a href="#">Profile</a>
							<a href="#">Security Options</a>								
							<a href="#">Settings</a>						
							<a href="index.html">Log Out</a>
						</div>
					</li>
					<li><a href="#news">News</a></li>					
					<li><a class="active" href="#home">Home</a></li>
				</ul>
			</div>
			<div class='feedwrapper'>
				<div id="profile">
					<div id="profilePic">
						<img src="../img/usersPics/MetalHunterR.jpg" width="100%" height="75%"/>
					</div>
					<h1><?php echo $user->GetProfileName();?></h1>
					<h3>Blood Tag: <a href="#">@<?php echo $user->GetUserTag();?></a></h3>
					<br>Birthday: <?php echo $user->GetBirthDay();?>
					<br>Profile Bio: <?php echo $user->GetProfileBio();?>
				</div>
				<div id="feed">
					<div id="newmessage">
						<div id="posterpics">
							<img src="../img/usersPics/MetalHunterR.jpg" width="90px" height="90px"/>
						</div>
						<div id="feedmessage">
							<input type="text" placeholder="Tell us... What's in your mind?" name="Message">
							<input type="submit" value="Post to Feed" name="PostMessage">
						</div>
					</div>
					<div id="usersMessage">
					</div>
				</div>
				<div id="ads">
					<div id="adsSlide">
						<img src="../img/ads/boobs.png" width="90%" height="75%"/>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>