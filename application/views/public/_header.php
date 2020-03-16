<header>
	<div class="top-header" style="background-image: url(<?php echo URL::site('img/iron_layer.jpg')?>)">
		<div class="top-header-container">
				<span>
					<?php echo HTML::image('/img/address.svg');?>
					<p><?php echo HTML::chars($address);?></p>
				</span>
				<span>
					<?php echo HTML::image('/img/iphone.png');?>
					<p><?php echo HTML::chars($phone);?></p>
				</span>
				<div class="social-top">
					<a href="<?php echo $contact_insta_url;?>" target="_blank">
                        <?php echo HTML::image('/img/instg.png');?>
						<p><?php echo (str_replace('https://instagram.com/','',$contact_insta_url))?></p>
					</a>
				</div>
		</div>
	</div>
</header>
