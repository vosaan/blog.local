<?php
	foreach($allPosts as $post) :?>
	<p><a href="post.php?id=<?=$post['id']?>"><?=$post['title']?></a></p>
	<p><?= dbConn::postIntro($post['message'])?></p>
<? endforeach; ?>