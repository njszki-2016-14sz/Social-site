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
		return $this->firstName." ".$this->lastName; //Te pöcs php-ban . al kell összefűzni stringet
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
		return $this->profilePic;
	}
}
/* 
1.) Static-al ne hívj osztályt mert elbaszakszik 
2.) Newsfeeden példányosítsd a User-t
*/
?>
