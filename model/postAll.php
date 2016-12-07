<?php
include("DB.php");
include("Post.php");

//getAllPosts()[index]->GetTagger();
function getAllPosts()
{
	$DB = new DB("SocialSiteDB");
	$sql = "SELECT * FROM newsfeed ORDER BY id DESC";
	$posts = $DB->query($sql);
	$kimenet = Array();
	
	foreach($posts as $aktPost)
	{
		$kimenet[] = new Post($aktPost['userTag'], $aktPost['postDate'], $aktPost['userMessage']);
	}
	return $kimenet;
}
?>