<main id="album">
<?php foreach ($pictures as $p){?>
	<a class="picture" rel="group" href="<?php echo URL::site($p->url($p::STANDARD_NAME));?>">
<?php echo HTML::image($p->url($p::GRID_PREVIEW_NAME)
//, array('alt' => $p->title, 'data-big' => URL::site($p->url($p::STANDARD_NAME)))
);?>
	</a>
<?php }?>
<!-- 	<div class="curtain"> -->
<!-- 		<div class="big-tsr"> -->
 <?php //include DOCROOT.'/img/cancel-button.svg';?>
<!-- 		</div> -->
<!-- 	</div> -->
</main>