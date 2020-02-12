<div class="square">
		<div class="layer_square" 
<?php echo HTML::attributes(array(
	'style' => 'background-image:url('.URL::site($b->url($b::STANDARD_NAME)).'); background-size: cover; background-position: center;'
));?>>
	   		<a
	<?php echo HTML::attributes(array(
		'href' 							=> $b->get_url(),
		'data-count'					=> 1,
		'class'							=> 'article-tsr',))
	?>>
				<div class="category"> <?php echo $b->category?></div>
				<div class="date"><?php echo Text::limit_chars($b->frontend_date, 10, '', false)?></div>
				<div class="heading">
					<?php echo $b->heading;?>
				</div>
			</a>
		</div>
		<div class="preview">
	<?php echo Text::limit_chars($b->preview_text,150,null,true);?></div>
</div>