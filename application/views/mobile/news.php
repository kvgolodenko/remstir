<main id="news">
	<div class="news">
<?php
	$display_next_page_link = false;
	foreach ($blog_articles as $i =>$b) { /* @var $blog_articles Model_News_Article */
		if ($i == Controller_Public::BLOGS_PER_PAGE) {
			$display_next_page_link = true;
			break;
		}
		$article_no = $page * Controller_Public::BLOGS_PER_PAGE + $i;
		echo View::factory('mobile/_article_teaser',array('b' => $b));
	}
 ?>
	</div>
<?php
	if ($display_next_page_link) {
?>
	<div class="load-more">
<?php
	echo HTML::anchor('/news?page=' . ($page+ 1).'#', __('Еще новости'));
?>
		<div class="loader">
<?php 
 	echo HTML::image('img/loader.svg', array('alt' => 'loader'))
?>
		</div>
	</div>
<?php
	}
?>
</main>