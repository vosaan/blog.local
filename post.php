<?php
	require_once ("db_conn.php");
	require_once ("model/posts_managment.php");
	$row = PostsManagment::postsById($link, $_GET['id']);
	include ("view/one_post.php");
?>
