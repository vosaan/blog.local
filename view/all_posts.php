<?php
	foreach($allPosts as $post) :?>
	<p><a href="post.php?id=<?=$post['id']?>"><?=$post['title']?></a></p>
	<p><?= PostsManagment::postIntro($post['message'])?></p>
<? endforeach; ?>