<div class="album">
	<div class="square" <?php echo HTML::attributes(array(
			'style' => 'background-image:url('.URL::site($a->url($a::STANDARD_NAME)).');'));?>>
			<div class="layer_square">
				<a<?php echo HTML::attributes(array(
					'href' 							=> $a->get_url(false),
					'data-count'					=> 1,
					'class'							=> 'album-tsr',
				)) ?>>
						<div class="heading">
							<?php echo $a->header;?>
								<p class="preview"></p>
						</div>
						<div class="date">
						<?php echo Text::limit_chars($a->created, 10, '', false)?>
						</div>
				</a>
			</div>
		<a<?php echo HTML::attributes(array(
			'href' 							=> "#",
			'data-count'					=> 1,
			'class'							=> 'album-tsr',
				))?>
		>
		</a>
	</div>
		<?php
		if($f>5){
			$k=4;
		}else{
			$k=$f;	
		};
		foreach ($p as $i){?>
	<div class="square-foto" <?php echo HTML::attributes(array(
		'style' => 'background-image:url('.URL::site($i->url($i::STANDARD_NAME)).');
				left:'. $k*10 .'px;
				bottom:'. $k*10 .'px;'
	));?>>
	</div>

		<?php $k--;}
		;?>
</div>