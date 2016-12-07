<!DOCTYPE html>
<?php
	include("../model/User.php");
	include("../model/Post.php");
	session_start();
	
	$user = $_SESSION['User'];
	if(!isset($_SESSION['User']))
	{
		header("location: index.php");
	}
	
	if(isset($_SESSION['PostData']))
	{
		$post = $_SESSION['PostData'];
	}
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
							<a href="index.php?logout=true">Log Out</a>
						</div>
					</li>
					<li><a href="#news">News</a></li>					
					<li><a class="active" href="#home">Home</a></li>
				</ul>
			</div>
			<div class='feedwrapper'>
				<div id="profile">
					<div id="profilePic">
						<img src=<?php echo $user->GetProfilePic();?> width="100%" height="75%"/>
					</div>
					<h1><?php echo $user->GetProfileName();?></h1>
					<h3>Blood Tag: <a href="#">@<?php echo $user->GetUserTag();?></a></h3>
					<br>Birthday: <?php echo $user->GetBirthDay();?>
					<br>Profile Bio: <?php echo $user->GetProfileBio();?>
				</div>
				<div id="feed">
					<div id="newmessage">
						<div id="posterpics">
							<img src=<?php echo $user->GetProfilePic();?> width="90px" height="90px"/>
						</div>
						<div id="feedmessage">
							<form method="POST" action="../controll/SignInControll.php">
								<input type="text" placeholder="Tell us... What's in your mind?" name="Message">
								<input type="submit" value="Post to Feed" name="PostMessage">
							</form>
						</div>
					</div>
					<div id="usersMessage">
						<div id="poster">
							MetalHunterR
						</div>
						<div id="message">
							Test Message Here
						</div>
						<div id="postDate">
							2016-12-07
						</div>						
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