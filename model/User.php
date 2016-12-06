<?php
include("DB.php");

class User
{
	private $firstName;
	private $lastName;
	private $userTag;
	private $birthDay;
	private $profileBio;
	private $profilePic;
	
	function __construct($first, $last, $tag, $day, $bio, $pic) {
		$this->firstName = $first;
		$this->lastName = $last;
		$this->userTag = $tag;
		$this->birthDay = $day;
		$this->profileBio = $bio;
		$this->profilePic = $pic;
	}
	
	function GetProfileName() {
		return $this->lastName . ' ' . $this->firstName;
	}
	
	function GetUserTag() {
		return $this->userTag;
	}	
	
	function GetBirthDay() {
		return $this->birthDay;
	}
	
	function GetProfileBio() {
		return $this->profileBio;
	}
	
	function GetProfilePic() {
		return "../img/usersPics/".$this->profilePic;
	}
	
	function AddPostToDB()
	{
		if(isset($_POST['PostMessage']))
		{
			$tagger = $this->userTag;
			$postDate = date("Y-m-d");
			$message = $_POST['Message'];
			
			$sql = "INSERT INTO newsfeed
				(userTag, userMessage, postDate)
				VALUES ('$tagger', '$message', $postDate)";			
			$res = $DB->query($sql);
			
			if($res == false)
			{
				print("Can't post the message");
				$_SESSION['error'] = "Can't post the message";
			}
			else
			{
				header("location: ../view/newsfeed.php");
			}
		}
	}
}
?>
