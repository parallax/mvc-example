Hello there <?php echo $name; ?>!

<?php

foreach($articles as $article) {
	?>
	
	<h2><?=$article['title']?></h2>
	<p><?=nl2br($article['body']); ?></p>
<?
}?>