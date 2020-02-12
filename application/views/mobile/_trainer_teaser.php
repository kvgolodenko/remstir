<div class="trainer_teaser" >
	<div class="trainer_square">
		<?php	echo HTML::image($t->url($t::STANDARD_NAME)); ?>
	</div>
	<h2><?php echo HTML::chars($t->name);?></h2>
	<h2><?php echo HTML::chars($t->position);?></h2>
	<p><?php echo $t->description;?>
	</p>
</div>