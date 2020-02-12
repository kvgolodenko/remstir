<header>
	<div class="top-header">
		<div class="top-header-container">
				<span>
					<?php echo HTML::image('/img/address.svg');?>
					<p><?php echo HTML::chars($address);?></p>
				</span>
				<span>
					<?php echo HTML::image('/img/phone.svg');?>
					<p><?php echo HTML::chars($phone);?></p>
				</span>
				<span>
					<?php echo HTML::image('/img/email.svg');?>
					<a href="mailto:<?php echo HTML::chars($email);	?>"><?php echo HTML::chars($email);	?></a>
				</span>
				<div class="social-top">
					<a href="<?php echo $contact_insta_url;?>" target="_blank">
						<?php include DOCROOT.'/img/instagram13.svg';?></a>
					<a href="<?php echo $contact_vk_url;?>" target="_blank">
						<?php include DOCROOT.'/img/vk5.svg';?></a>
				</div>
		</div>
	</div>
	<div class="menu-header">
	<a href="<?php echo URL::site('/');?>" class="logo_btn">
		<div class="main-logo"
		<?php
					echo HTML::attributes(array(
						'style' => 'background-image: url('.URL::site('/img/apollon_logo.png').')',
							));?>></div>
	</a>
		<div class="menu-set">
			<?php
			foreach ($menuitems as $m){
				?><a class="menu-item <?php echo $m->url_title?>" href="<?php echo URL::site($m->url_title); ?>">
				<?php echo $m->title;?>
				</a>
			<?php }?>
		</div>
	</div>
	<?php 
		echo View::factory('mobile/menu');
	?>

</header>
