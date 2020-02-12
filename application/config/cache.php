<?php defined('SYSPATH') OR die('No direct script access.');

return array
(
	'geolocation'    => array(
		'driver'             => 'file',
		'cache_dir'          => APPPATH.'cache/geolocation',
		'default_expire'     => 2600000, /* 30 days = 60 * 60 * 24 * 31 */
		'ignore_on_delete'   => array(
			'.gitignore',
			'.git',
			'.svn'
		)
	)
);
