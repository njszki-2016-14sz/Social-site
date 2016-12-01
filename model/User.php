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
	
	static function GetProfileName() {
		return $this->firstName + " " + $this->lastName;
	}
	
	static function GetUserTag() {
		return $this->userTag;
	}	
	
	static function GetBirthDay() {
		return $this->birthDay;
	}
	
	static function GetProfileBio() {
		return $this->profileBio;
	}
	
	static function GetProfilePic() {
		return $this->profilePic;
	}
}
?>
