<div id="index mobile">
	<div class="banner-header">
		<a href="<?= $banner_link;?>" class="banner-inner">
			<span class="red"><?= $banner_red_text;?></span>
			<span><?= $banner_text;?></span>
		</a>
	</div>
	<div class="fotorama-container">
			<div class="fotorama" data-autoplay="3000" data-loop="true" data-arrows="true" data-nav="dots" data-width="100%" data-height="100%" data-fit="cover">
<?php foreach ($startpage_images as $i){?>
				<div class="div_image" 
	<?php echo HTML::attributes(array(
		'style' => 'background-image: url('.URL::site($i->url($i::STANDARD_NAME)).')'
	)) ?>>
				</div>
<?php }?>
			</div>
		<div class="central-top-form">
			<h2>Тренируйся с нами!</h2>
			<p class="top-form-text">Запишись на бесплатное пробное занятие</p>
			<form class="input-form" action="subscribe" method="post">
				<input type="text" class="name" name="name" placeholder="Ваше имя" required="required">
				<input type="phone" class="phone" name="phone" placeholder="Ваш номер телефона" required="required">
				<div class="topform-btn"><p class="btn-text">Записаться</p></div>
				<div class="topform-btn-ok"><p class="btn-ok">OK</p></div>
				<input type="submit" class="top-btn">
				<div class="g-recaptcha" data-sitekey="6Le19AcUAAAAACfaqKP0JYAjOrdeGBGfGq93WSlq"></div>
			</form>
		</div>
	</div>
</div>
	<main class="home" id="home">
		<div class="startpage-text">
			<h2><?php echo $startpage_header?></h2>
			<p><?php echo $startpage_text?></p>
		</div>
		<div class="content">
<?php 
foreach ($categories as $c){
	echo View::factory('mobile/_menu_item_teaser',array('c' => $c));
}?>
		</div>
		<div class="startpage-text">
			<h2><?php echo $startpage_service_header?></h2>
			<p><?php echo $startpage_service_text?></p>
		</div>
		<div class="main-teasers">
			<div class="main-tsr">
				<a href="<?php echo URL::site('tabels')?>">
<?php include DOCROOT.'/img/calendar.svg';?>
					<h2>Расписание</h2>
				</a>
			</div>
			<div class="main-tsr">
				<a href="<?php echo URL::site('price')?>">
<?php include DOCROOT.'/img/payment.svg';?>
					<h2>Цены</h2>
				</a>
			</div>
			<div class="main-tsr">
				<a href="<?php echo URL::site('sportbar')?>">
<?php include DOCROOT.'/img/glass.svg';?>
					<h2>Спортбар</h2>
				</a>
			</div>
		</div>
	</main>
	<div class="transparent">
		<div class="title">
			<h1>Наши спецпредложения</h1>
<?php foreach ($startpage_items as $s){?>
			<a
	<?php echo HTML::attributes(array(
			'href' => URL::site('item/'.$s->url_title),
			'alt' => $s->header,
	));?>>
	<?php echo ($s->header);?>
			</a>
<?php }?>
		</div>
	</div>
	<div class="background" 
<?php echo HTML::attributes(array(
	'style' => 'background-image: url('.URL::site($startpage_image).')'
)) ?>>
	</div>
</div>

