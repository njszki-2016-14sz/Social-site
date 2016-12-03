<?php
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
}
?>
