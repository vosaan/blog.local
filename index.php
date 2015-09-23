<?php
	require_once ("db_conn.php");
	require_once ("model/posts_managment.php");

	$allPosts = PostsManagment::allPosts($link);
	include ("view/all_posts.php");
	
?>
