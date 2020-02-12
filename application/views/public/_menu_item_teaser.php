<div class="square" <?php echo HTML::attributes(array(
		'style' => 'background-image:url('.URL::site($c->url($c::STANDARD_NAME)).'); background-size: cover; background-position: center;'
		));?>>
		<div class="layer_square">
			<a<?php echo HTML::attributes(array(
				'href' 							=> $c->get_url(),
				'data-count'					=> 1,
				'class'							=> 'menu-item-tsr',
			)) ?>>
					<div class="category"> Вид спорта</div>
					<div class="heading">
						<?php echo $c->heading;?>
							<p class="preview"></p>
					</div>
			</a>
			<a<?php echo HTML::attributes(array(
				'href' 							=> $c->get_url(),
				'data-count'					=> 1,
				'class'							=> 'menu-item-tsr',
					))?>
			>
			</a>
		</div>
</div>