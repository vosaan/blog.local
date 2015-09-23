<?php
	require_once ("../db_conn.php");
	require_once ("../model/posts_managment.php");

	if(isset($_GET['action'])){
		$action = $_GET['action'];
	} else {
		$action = "";
	}

	if($action == "add"){
		if(!empty($_POST['title'])){
			PostsManagment::addPost($link, $_POST['title'], $_POST['message'], $_POST['date']);
			header('Location: admin.php');
		}
		include ("../view/admin_add_post.php");
	} else 
	if ($action=="del"){
		PostsManagment::delById($link, $_GET['id']);
		header('Location: admin.php');
	} else 
	if($action == "edit"){
		if(!isset($_GET['id'])){
			header('Location: admin.php');
		}
		
		$id = $_GET['id'];

		if(!empty($_POST) && $id > 0){
			PostsManagment::editById($link, $id, $_POST['title'], $_POST['message'], $_POST['date']);
			header('Location: admin.php');
		}

		$post = PostsManagment::postsById($link, $id);
		include ("../view/admin_add_post.php");
	} else {
	$allPosts = PostsManagment::allPosts($link);
	include ("../view/admin_panel.php");
	}






		//$row = dbConn::postsById($_GET['id']);
		/*if(!empty($_POST['title'])){
			//echo "<h1>".$_GET['id']."</h1>";
			dbConn::editById($_POST['id'] ,$_POST['title'], $_POST['message'], $_POST['date']);
			header('Location: admin.php');
		}
		include ("../view/admin_add_post.php");*/


	/*if(!empty($_GET['action'])){
		$action = $_GET['action'];
		
		if ($action=="del"){
			dbConn::delById($_GET['id']);
			header('Location: admin.php');
		} else 

		if ($action == "add"){
			if(!isset($_POST['title'])){
			include ("../view/admin_add_post.php");
			//header('Location: admin.php');
			} else {
			dbConn::addPost($_POST['title'], $_POST['message'], $_POST['date']);}
		}	
	} else {
	$allPosts = dbConn::allPosts();
	include ("../view/admin_panel.php");
	}*/
?>