<?php defined('SYSPATH') OR die('No direct script access.') ?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo HTML::__('Apollon admin panel') ?></title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

<?php

// add page styles
foreach ($styles as $style)
{
	if (isset($style['condition'])) echo '<!--[if ', $style['condition'], ']>';
	echo HTML::style($style['url'], (isset($style['media']) ? array('media' => $style['media']) : null));
	if (isset($style['condition'])) echo '<![endif]-->';
}

// add page scripts
foreach ($scripts as $script)
{
	echo HTML::script($script);
}

?>
<script type="text/javascript">
	AVO.settings.base_path = <?php echo json_encode($base_url)?>;
</script>

</head>

<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <div id="container">
<?php
if ($show_header) {
?>
    <header>
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav">
						<?php
							if (isset($menu)) {
								foreach ($menu as $id => $item) {
									($menu_id === $id) ? $class = 'active' : $class = '';
									echo '<li class="' . $class . '">';
									echo HTML::anchor($item['url'], $item['title'], array('class' => ''), null, true);
									echo '</li>';
								}
							} ?>
					</ul>
					<ul class="nav pull-right">
						<li class="dropdown">
						<?php if (isset($username)) { ?>
							<?php echo HTML::anchor('#', '' . $username . ' <b class="caret"></b>', array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown')) ?>
							<ul class="dropdown-menu">
								<li><?php echo HTML::anchor('admin/auth/quit', __('Sign out'));?></li>
								<li><?php echo HTML::anchor('admin/settings/admin_profile', __('Profile settings'));?></li>
							</ul>
						<?php } ?>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<ul class="nav">
						<?php if ($is_admin && $sub_menu !== null) { ?>
							<?php foreach ($sub_menu as $id => $item) {
								($sub_menu_id === $id) ? $class = 'active' : $class = '';
								echo '<li class="'.$class.'">';
								echo HTML::anchor($item['url'], $item['title'], null, null, true);
								echo '</li>';
							} ?>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</header>
<?php
}
?>
	<div id="content">
		<?php echo $content ?>
	</div>

    <footer>
    </footer>
	<div id="ajax_communication_indicator"><?php echo HTML::__('Loading. Please wait...') ?></div>
  </div>

 <?php if (Kohana::$environment == Kohana::DEVELOPMENT) ProfilerToolbar::render(true) ?>
 <?php // echo View::factory('profiler/stats')?>


  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
</body>
</html>
