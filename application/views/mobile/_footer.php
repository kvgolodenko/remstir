<footer class="footer">
	<div class="footer_container">
		<a class="footer_logo" href="/apollon">
			<?php
				echo HTML::image(URL::site('../img/apollon_logo.png'), array(
					'alt'							=> 'footer_logo',
							));?>
		</a>
		<div class="footer_about">
		<?php echo $footer_text;?>
		</div>
		<div class="footer-menu">
		<?php 
			foreach ($menuitems as $m){?>
				<a href="<?php echo URL::site($m->url_title);?>">
					<p class="footer-item">
						<?php echo $m->title;?>
					</p>
				</a>
			<?php }?>
		</div>
		<div class="footer_contacts">
			<div class="contact">
				<h3>Адрес</h3>
				<p><?php echo HTML::chars($address);?></p>
				<h3>Телефоны</h3>
				<p><?php echo HTML::chars($phone);?></p>
				<h3>E-mail</h3>
				<a href="mailto:<?php echo HTML::chars($email);	?>"><?php echo HTML::chars($email);	?></a>
			</div>
		</div>
		<div class="social">
			<a href="<?php echo $contact_insta_url;?>" target="_blank">
				<?php include DOCROOT.'/img/instagram13.svg';?>
			<a href="<?php echo $contact_vk_url;?>" target="_blank">
				<?php include DOCROOT.'/img/vk5.svg';?>
			</a>
		</div>
		<div class="copyright" style="text-align:left;clear:both;padding: 20px; font-size:20px;">2016 | <a href="http://kirill.dev.modulez.no/coffee">Сделано в <u>Коффи</u></a></div>
	</div>
</footer>