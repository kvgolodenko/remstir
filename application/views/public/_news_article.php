<main id="article">
	<div class="left-column">
		<h2><?php echo  $news_article->heading;?></h2>
		<?php echo  $news_article->frontend_date;?>
		</br>
		<?php echo  $news_article->category;?>
		</br>
		<p class="preview-text"><?php echo  $news_article->preview_text;?></p>
		</br>
		<?php echo  $news_article->body_text;?>
	</div>
	<div class="right-column" style="background: url('<?php echo URL::site($news_article->url($news_article::STANDARD_NAME))?>');"></div>
</main>