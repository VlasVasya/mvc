
<ul>
	<?php foreach ($admin as $id => $article) { ?>
	<li><a href="?page=article&id=<?=$id;?>"><?=$article['login'] ?></li>
	<?php } ?>
</ul>