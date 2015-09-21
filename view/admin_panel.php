<a href = "admin.php?action=add">Add post</a>
<table>
<?php
	foreach($allPosts as $post) :?>
	<tr>
		<td><?=$post['title']?></td>
		<td><a href="admin.php?action=del&id=<?=$post['id']?>">Delete</a></td>
		<td><a href="admin.php?action=edit&id=<?=$post['id']?>">Edit</a></td>
	</tr>
<? endforeach; ?>
</table>