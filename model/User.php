<?php
class User
{
	function __construct($firstName, $lastName, $userTag, $birthDay, $profileBio, $profilePic) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->userTag = $userTag;
		$this->birthDay = $birthDay;
		$this->profileBio = $profileBio;
		$this->profilePic = $profilePic;
	}
	
	function SetProfile() {
		print($this->firsName);
	}
}
?>
