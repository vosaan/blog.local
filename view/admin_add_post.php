
<form action = "admin.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>" method = "POST">
	<label>
		Title
		<input type="text" name="title" required focus value="<?php if($_GET['action'] == "edit") echo $post['title']; ?>">
	</label><br>
	<label>
		Message
		<textarea name = "message" required><?php if($_GET['action'] == "edit") echo $post['message']?></textarea>
	</label><br>
	<input type = "hidden" name="date" value = <?php echo date("Y-m-d")?>>
	
	<input type = "submit" value = "Save post">
</form>
