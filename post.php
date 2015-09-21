<?php
	require_once ("db_conn.php");
	$row = dbConn::postsById($_GET['id']);
	include ("view/one_post.php");
?>