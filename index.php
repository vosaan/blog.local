<?php
	require_once ("db_conn.php");

	$allPosts = dbConn::allPosts();
	include ("view/all_posts.php");
	
?>
