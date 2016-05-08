<div class="about_diu">
	<ul>
		<?php foreach ($articles as $article) { ?>
			<li>
				<h1><?php echo $article['articles_title']; ?></h1><br /> 
				<?php echo $article['articles_content']; ?>
			</li>
		<?php } ?>
	</ul>
	<br>
</div>