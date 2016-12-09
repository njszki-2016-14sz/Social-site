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
		$msg = $this->message;
		$order   = array("\r\n", "\n", "\r");
		$replace = '<br />';
		
		$new_msg = str_replace($order, $replace, $msg);
		
		return $new_msg;
	}		
}
?>