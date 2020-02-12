<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="<?php echo URL::site('/favicon.ico'); ?>" type="image/x-icon">
	<title><?php echo HTML::chars('Remont') ?></title>
	<meta <?php echo HTML::attributes(array('name' => 'description', 'content' => HTML::chars($seo_description))) ?>>
	<meta <?php echo HTML::attributes(array('name' => 'keywords', 'content' => HTML::chars($seo_keywords))) ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<!-- 	<script type="text/javascript" src="http://maps.google.com/maps/api/js?"></script> -->
	<link rel="apple-touch-icon" href="<?php echo URL::site('/touch-icon-iphone.png') ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL::site('/touch-icon-ipad.png') ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL::site('/touch-icon-iphone-retina.png') ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL::site('/touch-icon-ipad-retina.png') ?>">
	<link rel="icon" type="image/png" href="<?php echo URL::site('/favicon.ico'); ?>">
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<script src="https://use.typekit.net/xxo4xeh.js"></script>
<!--	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>-->
<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script>
		window.onunload = function(){};
		window.onpageshow = function(event) {
		    if (event.persisted) {
		        window.location.reload();
		    }
		};
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--<script src="http://www.fortress-design.com/js/snow-fall.js" type="text/javascript"></script>-->

	<?php
		if (isset($og_title) && $og_title)
		{
	?>
		<meta <?php echo HTML::attributes(array('property' => 'og:title', 'content' => $og_title)) ?>>
	<?php
		}
		if (isset($og_url) && $og_url)
		{
	?>
		<meta <?php echo HTML::attributes(array('property' => 'og:url', 'content' => $og_url)) ?>>
	<?php
		}
		if (isset($og_description) && $og_description)
		{
	?>
		<meta <?php echo HTML::attributes(array('property' => 'og:description', 'content' => $og_description)) ?>>
	<?php
		}
		if (isset($og_image) && $og_image)
		{
	?>
		<meta <?php echo HTML::attributes(array('property' => 'og:image', 'content' => $og_image)) ?>>
	<?php
		}
		if (isset($og_type) && $og_type)
		{
	?>
		<meta <?php echo HTML::attributes(array('property' => 'og:type', 'content' => $og_type)) ?>>
	<?php
		}
		if (isset($fb_app_id) && $fb_app_id)
		{
	?>
		<meta <?php echo HTML::attributes(array('property' => 'fb:app_id', 'content' => $fb_app_id)) ?>>
	<?php
		}
	?>
<?php
// add page styles
foreach ($styles as $item)
{
	if (is_array($item))
	{
		$url = $item['url'];
		$attributes = $item;
		unset($attributes['url']);
	}
	else
	{
		$url = $style;
		$attributes = NULL;
	}
	echo HTML::style($url, $attributes), PHP_EOL;
}



// prevent LESS caching during development (Did not work for Google Chrome version >= 29)
if (Kohana::$environment == Kohana::DEVELOPMENT)
{
?>
<script type="text/javascript">var less=less||{};less.env='development';</script>
<?php
}

foreach ($scripts as $script)
{
	if (is_array($script))
	{
		$url = $script['url'];
		if (isset($script['if']))
		{
			echo "<!--[if {$script['if']}]>";
		}
		echo HTML::script($url);
		if (isset($script['if']))
		{
			echo '<![endif]-->';
		}
	}
	else
	{
		echo HTML::script($script);
	}
	echo PHP_EOL;
}
?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">
//    (function (d, w, c) {
//        (w[c] = w[c] || []).push(function() {
//            try {
//                w.yaCounter39791885 = new Ya.Metrika({
//                    id:39791885,
//                    clickmap:true,
//                    trackLinks:true,
//                    accurateTrackBounce:true,
//                    webvisor:true,
//                    trackHash:true
//                });
//            } catch(e) { }
//        });
//
//        var n = d.getElementsByTagName("script")[0],
//            s = d.createElement("script"),
//            f = function () { n.parentNode.insertBefore(s, n); };
//        s.type = "text/javascript";
//        s.async = true;
//        s.src = "https://mc.yandex.ru/metrika/watch.js";
//
//        if (w.opera == "[object Opera]") {
//            d.addEventListener("DOMContentLoaded", f, false);
//        } else { f(); }
//    })(document, window, "yandex_metrika_callbacks");
</script>
<!--<noscript><div><img src="https://mc.yandex.ru/watch/39791885" style="position:absolute; left:-9999px;" alt="" /></div></noscript>-->
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120820243-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-120820243-1');
</script>
</head>
<body<?php echo HTML::attributes(array(
	'data-base-url' 				=> HTML::chars(URL::base()),
	'class' 						=> 'busy',
	'data-responsive-bp'		=> '1280, 1024, 767, 0',
))?>>


<?php
	if (isset($fb_app_id) && $fb_app_id)
	{
?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : <?php echo $fb_app_id ?>,
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<?php
	}
?>



	<!--[if lt IE 7]><p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p><![endif]-->
	<div id="container"><?php
			echo View::factory('public/_header');
			echo $content;
			echo View::factory('public/_footer');
	?><div id="busy_overlay" class="overlay"></div></div><!-- container -->
	<div id="loading_overlay"></div><!-- container -->
<?php if ($google_api_key): ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', <?php echo json_encode($google_api_key) ?>, 'auto');
		ga('send', 'pageview');
	</script>
<?php endif ?>

	<?php /* if (Kohana::$environment == Kohana::DEVELOPMENT) ProfilerToolbar::render(TRUE)  */ ?>
<!-- 	<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script> -->
</body>
</html>
