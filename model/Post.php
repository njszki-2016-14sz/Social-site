<?php
class Post
{
	private $tagger;
	private $postDate;
	private $message;
	
	function __construct($tag, $date, $msg) {
		$this->tagger = $tag;
		$this->postDate = $date;
		$this->message = $msg;
	}
	
	function GetTagger()
	{
		return $this->tagger;
	}
	
	function GetPostDate()
	{
		return $this->postDate;
	}
	
	function GetMessage()
	{
		return $this->message;
	}		
}
?>