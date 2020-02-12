<div class="category-article">
		<?php echo HTML::image(URL::site($article->url($article::STANDARD_NAME)))?>
	<h2>
		<?php echo $article->heading;?>
	</h2>
	<p class="cat-text">
		<?php echo $article->text; ?>
	</p>
	<div class="back=btn"></div>
</div>